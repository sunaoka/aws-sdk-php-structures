<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBSecurityStrategy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property 'ClientSpecified'|'MandatorySigning'|'MandatoryEncryption'|'MandatoryEncryptionNoAes128' $SMBSecurityStrategy
 */
class UpdateSMBSecurityStrategyRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     SMBSecurityStrategy: 'ClientSpecified'|'MandatorySigning'|'MandatoryEncryption'|'MandatoryEncryptionNoAes128'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
