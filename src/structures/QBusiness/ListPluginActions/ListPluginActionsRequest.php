<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $pluginId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPluginActionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     pluginId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
