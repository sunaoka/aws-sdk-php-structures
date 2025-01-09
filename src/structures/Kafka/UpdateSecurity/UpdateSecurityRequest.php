<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateSecurity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ClientAuthentication $ClientAuthentication
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property Shapes\EncryptionInfo $EncryptionInfo
 */
class UpdateSecurityRequest extends Request
{
    /**
     * @param array{
     *     ClientAuthentication?: Shapes\ClientAuthentication,
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     EncryptionInfo?: Shapes\EncryptionInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
