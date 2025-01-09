<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationAnalysisTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $nextToken
 * @property int $maxResults
 */
class ListCollaborationAnalysisTemplatesRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
