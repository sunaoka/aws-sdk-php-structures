<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $nextToken
 */
class ListBuildsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
