<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateSecurityHubConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AutoEnableControls
 * @property 'STANDARD_CONTROL'|'SECURITY_CONTROL'|null $ControlFindingGenerator
 */
class UpdateSecurityHubConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoEnableControls?: bool|null,
     *     ControlFindingGenerator?: 'STANDARD_CONTROL'|'SECURITY_CONTROL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
