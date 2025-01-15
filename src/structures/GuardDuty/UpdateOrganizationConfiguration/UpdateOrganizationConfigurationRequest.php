<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property bool|null $AutoEnable
 * @property Shapes\OrganizationDataSourceConfigurations|null $DataSources
 * @property list<Shapes\OrganizationFeatureConfiguration>|null $Features
 * @property 'NEW'|'ALL'|'NONE'|null $AutoEnableOrganizationMembers
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AutoEnable?: bool|null,
     *     DataSources?: Shapes\OrganizationDataSourceConfigurations|null,
     *     Features?: list<Shapes\OrganizationFeatureConfiguration>|null,
     *     AutoEnableOrganizationMembers?: 'NEW'|'ALL'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
