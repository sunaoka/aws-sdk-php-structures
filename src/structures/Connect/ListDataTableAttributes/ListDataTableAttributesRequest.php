<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTableAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<string>|null $AttributeIds
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListDataTableAttributesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     AttributeIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
