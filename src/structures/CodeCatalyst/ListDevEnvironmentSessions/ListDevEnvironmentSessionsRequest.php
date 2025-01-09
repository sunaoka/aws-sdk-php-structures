<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironmentSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $devEnvironmentId
 * @property string $nextToken
 * @property int<1, 200> $maxResults
 */
class ListDevEnvironmentSessionsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     devEnvironmentId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
