<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $collaborationIdentifier
 */
class ListCollaborationTrainedModelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
