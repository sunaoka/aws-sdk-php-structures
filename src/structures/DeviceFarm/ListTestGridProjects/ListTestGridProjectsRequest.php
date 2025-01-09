<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResult
 * @property string $nextToken
 */
class ListTestGridProjectsRequest extends Request
{
    /**
     * @param array{
     *     maxResult?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
