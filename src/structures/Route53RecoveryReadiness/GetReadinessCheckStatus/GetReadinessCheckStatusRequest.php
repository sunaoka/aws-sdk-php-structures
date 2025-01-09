<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ReadinessCheckName
 */
class GetReadinessCheckStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ReadinessCheckName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
