<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $pluginId
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListPluginActionsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     pluginId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
