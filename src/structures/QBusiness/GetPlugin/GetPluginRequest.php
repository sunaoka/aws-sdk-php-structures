<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $pluginId
 */
class GetPluginRequest extends Request
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
