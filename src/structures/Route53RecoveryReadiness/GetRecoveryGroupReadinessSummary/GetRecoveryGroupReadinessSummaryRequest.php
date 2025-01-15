<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetRecoveryGroupReadinessSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $RecoveryGroupName
 */
class GetRecoveryGroupReadinessSummaryRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     RecoveryGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
