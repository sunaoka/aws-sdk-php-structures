<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetReadinessCheckResourceStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ReadinessCheckName
 * @property string $ResourceIdentifier
 */
class GetReadinessCheckResourceStatusRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ReadinessCheckName: string,
     *     ResourceIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
