<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteServiceFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string $serviceFunctionId
 */
class DeleteServiceFunctionRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     serviceFunctionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
