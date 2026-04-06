<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTablePrimaryValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<string>|null $RecordIds
 * @property list<Shapes\PrimaryAttributeValueFilter>|null $PrimaryAttributeValues
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataTablePrimaryValuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     RecordIds?: list<string>|null,
     *     PrimaryAttributeValues?: list<Shapes\PrimaryAttributeValueFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
