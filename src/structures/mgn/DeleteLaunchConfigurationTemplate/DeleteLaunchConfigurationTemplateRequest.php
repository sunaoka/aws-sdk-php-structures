<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launchConfigurationTemplateID
 */
class DeleteLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{launchConfigurationTemplateID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
