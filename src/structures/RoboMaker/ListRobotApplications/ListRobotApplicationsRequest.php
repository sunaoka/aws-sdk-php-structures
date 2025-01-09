<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobotApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $versionQualifier
 * @property string $nextToken
 * @property int $maxResults
 * @property list<Shapes\Filter> $filters
 */
class ListRobotApplicationsRequest extends Request
{
    /**
     * @param array{
     *     versionQualifier?: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
