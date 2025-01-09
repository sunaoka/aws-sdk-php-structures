<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property string $environmentName
 * @property string $nextToken
 */
class ListEnvironmentOutputsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string,
     *     environmentName: string,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
