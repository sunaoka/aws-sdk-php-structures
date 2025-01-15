<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobotApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $versionQualifier
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property list<Shapes\Filter>|null $filters
 */
class ListRobotApplicationsRequest extends Request
{
    /**
     * @param array{
     *     versionQualifier?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
