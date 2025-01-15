<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListBuildsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
