<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoEnable
 * @property 'NONE'|'DEFAULT' $AutoEnableStandards
 * @property Shapes\OrganizationConfiguration $OrganizationConfiguration
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoEnable: bool,
     *     AutoEnableStandards?: 'NONE'|'DEFAULT',
     *     OrganizationConfiguration?: Shapes\OrganizationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
