<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $credentialsParameter
 */
class ExpressGatewayRepositoryCredentials extends Shape
{
    /**
     * @param array{credentialsParameter?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
