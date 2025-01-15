<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateSecurity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ClientAuthentication|null $ClientAuthentication
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property Shapes\EncryptionInfo|null $EncryptionInfo
 */
class UpdateSecurityRequest extends Request
{
    /**
     * @param array{
     *     ClientAuthentication?: Shapes\ClientAuthentication|null,
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     EncryptionInfo?: Shapes\EncryptionInfo|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
