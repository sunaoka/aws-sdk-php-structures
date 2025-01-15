<?php

namespace Sunaoka\Aws\Structures\Proton\ListComponentOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentName
 * @property string|null $deploymentId
 * @property string|null $nextToken
 */
class ListComponentOutputsRequest extends Request
{
    /**
     * @param array{
     *     componentName: string,
     *     deploymentId?: string|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
