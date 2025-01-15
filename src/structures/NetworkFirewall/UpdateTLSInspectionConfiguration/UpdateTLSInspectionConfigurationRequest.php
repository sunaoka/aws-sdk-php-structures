<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TLSInspectionConfigurationArn
 * @property string|null $TLSInspectionConfigurationName
 * @property Shapes\TLSInspectionConfiguration $TLSInspectionConfiguration
 * @property string|null $Description
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property string $UpdateToken
 */
class UpdateTLSInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TLSInspectionConfigurationArn?: string|null,
     *     TLSInspectionConfigurationName?: string|null,
     *     TLSInspectionConfiguration: Shapes\TLSInspectionConfiguration,
     *     Description?: string|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
