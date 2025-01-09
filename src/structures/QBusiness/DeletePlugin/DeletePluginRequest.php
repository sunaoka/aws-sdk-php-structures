<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeletePlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $pluginId
 */
class DeletePluginRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     pluginId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
