<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $basePath
 * @property string|null $restApiId
 * @property string|null $stage
 */
class BasePathMapping extends Shape
{
    /**
     * @param array{
     *     basePath?: string|null,
     *     restApiId?: string|null,
     *     stage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
