<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizationType
 * @property bool|null $apiKeyRequired
 */
class MethodSnapshot extends Shape
{
    /**
     * @param array{
     *     authorizationType?: string|null,
     *     apiKeyRequired?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
