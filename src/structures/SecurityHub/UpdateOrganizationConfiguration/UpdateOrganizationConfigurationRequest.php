<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoEnable
 * @property 'NONE'|'DEFAULT'|null $AutoEnableStandards
 * @property Shapes\OrganizationConfiguration|null $OrganizationConfiguration
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoEnable: bool,
     *     AutoEnableStandards?: 'NONE'|'DEFAULT'|null,
     *     OrganizationConfiguration?: Shapes\OrganizationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
