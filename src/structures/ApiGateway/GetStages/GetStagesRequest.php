<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetStages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $restApiId
 * @property string|null $deploymentId
 */
class GetStagesRequest extends Request
{
    /**
     * @param array{
     *     restApiId: string,
     *     deploymentId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
