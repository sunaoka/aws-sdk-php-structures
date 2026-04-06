<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CognitoConfig|null $CognitoConfig
 * @property None|null $None
 */
class Authorization extends Shape
{
    /**
     * @param array{
     *     CognitoConfig?: CognitoConfig|null,
     *     None?: None|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
