<?php

namespace Sunaoka\Aws\Structures\mgn\RemoveTemplateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launchConfigurationTemplateID
 * @property string $actionID
 */
class RemoveTemplateActionRequest extends Request
{
    /**
     * @param array{
     *     launchConfigurationTemplateID: string,
     *     actionID: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
