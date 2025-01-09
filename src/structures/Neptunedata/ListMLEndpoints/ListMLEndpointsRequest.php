<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ListMLEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1024> $maxItems
 * @property string $neptuneIamRoleArn
 */
class ListMLEndpointsRequest extends Request
{
    /**
     * @param array{
     *     maxItems?: int<1, 1024>,
     *     neptuneIamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
