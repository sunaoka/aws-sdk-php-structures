<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TLSInspectionConfigurationName
 * @property Shapes\TLSInspectionConfiguration $TLSInspectionConfiguration
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\EncryptionConfiguration $EncryptionConfiguration
 */
class CreateTLSInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TLSInspectionConfigurationName: string,
     *     TLSInspectionConfiguration: Shapes\TLSInspectionConfiguration,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
