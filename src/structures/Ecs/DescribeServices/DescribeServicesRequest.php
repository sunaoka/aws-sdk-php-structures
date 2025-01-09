<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $services
 * @property list<'TAGS'> $include
 */
class DescribeServicesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     services: list<string>,
     *     include?: list<'TAGS'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
