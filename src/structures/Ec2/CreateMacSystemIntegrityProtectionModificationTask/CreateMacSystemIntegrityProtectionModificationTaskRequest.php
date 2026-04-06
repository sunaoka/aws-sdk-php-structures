<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateMacSystemIntegrityProtectionModificationTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property string|null $MacCredentials
 * @property Shapes\MacSystemIntegrityProtectionConfigurationRequest|null $MacSystemIntegrityProtectionConfiguration
 * @property 'enabled'|'disabled' $MacSystemIntegrityProtectionStatus
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateMacSystemIntegrityProtectionModificationTaskRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     MacCredentials?: string|null,
     *     MacSystemIntegrityProtectionConfiguration?: Shapes\MacSystemIntegrityProtectionConfigurationRequest|null,
     *     MacSystemIntegrityProtectionStatus: 'enabled'|'disabled',
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
