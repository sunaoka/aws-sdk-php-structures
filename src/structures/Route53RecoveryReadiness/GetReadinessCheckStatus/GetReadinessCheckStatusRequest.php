<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ReadinessCheckName
 */
class GetReadinessCheckStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ReadinessCheckName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
