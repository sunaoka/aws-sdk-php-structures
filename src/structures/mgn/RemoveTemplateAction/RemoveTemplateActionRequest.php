<?php

namespace Sunaoka\Aws\Structures\mgn\RemoveTemplateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionID
 * @property string $launchConfigurationTemplateID
 */
class RemoveTemplateActionRequest extends Request
{
    /**
     * @param array{
     *     actionID: string,
     *     launchConfigurationTemplateID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
