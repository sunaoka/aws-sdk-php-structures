<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironmentSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $devEnvironmentId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDevEnvironmentSessionsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     devEnvironmentId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
