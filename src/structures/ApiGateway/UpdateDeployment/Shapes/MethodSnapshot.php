<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationType
 * @property bool $apiKeyRequired
 */
class MethodSnapshot extends Shape
{
    /**
     * @param array{
     *     authorizationType?: string,
     *     apiKeyRequired?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
