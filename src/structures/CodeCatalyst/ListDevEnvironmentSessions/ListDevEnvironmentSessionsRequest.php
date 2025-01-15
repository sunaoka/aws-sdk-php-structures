<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironmentSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $devEnvironmentId
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 */
class ListDevEnvironmentSessionsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     devEnvironmentId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
