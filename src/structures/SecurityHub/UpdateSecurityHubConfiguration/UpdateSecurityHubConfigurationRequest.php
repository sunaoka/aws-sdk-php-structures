<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateSecurityHubConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $AutoEnableControls
 * @property 'STANDARD_CONTROL'|'SECURITY_CONTROL' $ControlFindingGenerator
 */
class UpdateSecurityHubConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoEnableControls?: bool,
     *     ControlFindingGenerator?: 'STANDARD_CONTROL'|'SECURITY_CONTROL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
