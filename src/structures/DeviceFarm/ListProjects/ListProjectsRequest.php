<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $arn
 * @property string|null $nextToken
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     arn?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
