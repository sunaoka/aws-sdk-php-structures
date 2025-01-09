<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentType
 * @property string $Description
 * @property string $ModelId
 * @property string $Name
 * @property string $Schema
 */
class Model extends Shape
{
    /**
     * @param array{
     *     ContentType?: string,
     *     Description?: string,
     *     ModelId?: string,
     *     Name: string,
     *     Schema?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
