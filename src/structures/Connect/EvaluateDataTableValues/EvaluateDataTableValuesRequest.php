<?php

namespace Sunaoka\Aws\Structures\Connect\EvaluateDataTableValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataTableId
 * @property list<Shapes\DataTableValueEvaluationSet> $Values
 * @property string|null $TimeZone
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class EvaluateDataTableValuesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataTableId: string,
     *     Values: list<Shapes\DataTableValueEvaluationSet>,
     *     TimeZone?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
