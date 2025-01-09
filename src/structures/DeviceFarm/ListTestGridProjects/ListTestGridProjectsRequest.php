<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $maxResult
 * @property string $nextToken
 */
class ListTestGridProjectsRequest extends Request
{
    /**
     * @param array{
     *     maxResult?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
