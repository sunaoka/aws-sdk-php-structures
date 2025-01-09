<?php

namespace Sunaoka\Aws\Structures\Route53\CreateKeySigningKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallerReference
 * @property string $HostedZoneId
 * @property string $KeyManagementServiceArn
 * @property string $Name
 * @property string $Status
 */
class CreateKeySigningKeyRequest extends Request
{
    /**
     * @param array{
     *     CallerReference: string,
     *     HostedZoneId: string,
     *     KeyManagementServiceArn: string,
     *     Name: string,
     *     Status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
