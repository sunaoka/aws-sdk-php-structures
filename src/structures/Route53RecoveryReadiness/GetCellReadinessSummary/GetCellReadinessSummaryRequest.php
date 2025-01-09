<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCellReadinessSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CellName
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetCellReadinessSummaryRequest extends Request
{
    /**
     * @param array{
     *     CellName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
