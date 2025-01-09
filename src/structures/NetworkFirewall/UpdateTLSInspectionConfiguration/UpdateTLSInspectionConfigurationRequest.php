<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TLSInspectionConfigurationArn
 * @property string $TLSInspectionConfigurationName
 * @property Shapes\TLSInspectionConfiguration $TLSInspectionConfiguration
 * @property string $Description
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 * @property string $UpdateToken
 */
class UpdateTLSInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TLSInspectionConfigurationArn?: string,
     *     TLSInspectionConfigurationName?: string,
     *     TLSInspectionConfiguration: Shapes\TLSInspectionConfiguration,
     *     Description?: string,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
