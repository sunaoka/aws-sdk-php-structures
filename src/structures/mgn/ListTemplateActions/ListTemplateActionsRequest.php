<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TemplateActionsRequestFilters $filters
 * @property string $launchConfigurationTemplateID
 * @property int $maxResults
 * @property string $nextToken
 */
class ListTemplateActionsRequest extends Request
{
    /**
     * @param array{
     *     filters?: Shapes\TemplateActionsRequestFilters,
     *     launchConfigurationTemplateID: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
