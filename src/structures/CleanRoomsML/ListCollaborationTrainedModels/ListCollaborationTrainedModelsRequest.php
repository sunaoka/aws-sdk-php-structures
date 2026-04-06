<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property string $collaborationIdentifier
 */
class ListCollaborationTrainedModelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
