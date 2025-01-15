<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateTLSInspectionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TLSInspectionConfigurationName
 * @property Shapes\TLSInspectionConfiguration $TLSInspectionConfiguration
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 */
class CreateTLSInspectionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     TLSInspectionConfigurationName: string,
     *     TLSInspectionConfiguration: Shapes\TLSInspectionConfiguration,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EncryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
