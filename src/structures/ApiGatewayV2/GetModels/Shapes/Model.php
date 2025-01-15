<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContentType
 * @property string|null $Description
 * @property string|null $ModelId
 * @property string $Name
 * @property string|null $Schema
 */
class Model extends Shape
{
    /**
     * @param array{
     *     ContentType?: string|null,
     *     Description?: string|null,
     *     ModelId?: string|null,
     *     Name: string,
     *     Schema?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
