<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $deploymentId
 * @property string $environmentName
 * @property string|null $nextToken
 */
class ListEnvironmentOutputsRequest extends Request
{
    /**
     * @param array{
     *     deploymentId?: string|null,
     *     environmentName: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
