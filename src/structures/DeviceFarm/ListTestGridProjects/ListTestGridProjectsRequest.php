<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $maxResult
 * @property string|null $nextToken
 */
class ListTestGridProjectsRequest extends Request
{
    /**
     * @param array{
     *     maxResult?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
