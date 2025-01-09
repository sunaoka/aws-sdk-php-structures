<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 * @property string $deploymentId
 * @property string $nextToken
 */
class ListComponentOutputsRequest extends Request
{
    /**
     * @param array{
     *     componentName: string,
     *     deploymentId?: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
