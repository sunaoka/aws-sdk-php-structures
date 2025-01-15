<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property list<string> $services
 * @property list<'TAGS'>|null $include
 */
class DescribeServicesRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     services: list<string>,
     *     include?: list<'TAGS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
