<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property bool $AutoEnable
 * @property Shapes\OrganizationDataSourceConfigurations $DataSources
 * @property list<Shapes\OrganizationFeatureConfiguration> $Features
 * @property 'NEW'|'ALL'|'NONE' $AutoEnableOrganizationMembers
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AutoEnable?: bool,
     *     DataSources?: Shapes\OrganizationDataSourceConfigurations,
     *     Features?: list<Shapes\OrganizationFeatureConfiguration>,
     *     AutoEnableOrganizationMembers?: 'NEW'|'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
