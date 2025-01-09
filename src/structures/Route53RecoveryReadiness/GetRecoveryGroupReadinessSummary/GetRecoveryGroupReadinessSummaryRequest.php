<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetRecoveryGroupReadinessSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $RecoveryGroupName
 */
class GetRecoveryGroupReadinessSummaryRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     RecoveryGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
