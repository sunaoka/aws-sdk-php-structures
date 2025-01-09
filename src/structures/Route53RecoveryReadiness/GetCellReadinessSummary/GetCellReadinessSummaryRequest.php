<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCellReadinessSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class GetCellReadinessSummaryRequest extends Request
{
    /**
     * @param array{
     *     CellName: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
