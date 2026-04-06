<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateOrganizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoEnable
 * @property 'NONE'|'DEFAULT'|null $AutoEnableStandards
 */
class UpdateOrganizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoEnable: bool,
     *     AutoEnableStandards?: 'NONE'|'DEFAULT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
