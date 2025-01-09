<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ListSubjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $pageSize
 */
class ListSubjectsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     pageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
