<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteExpressGatewayService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 */
class DeleteExpressGatewayServiceRequest extends Request
{
    /**
     * @param array{serviceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
