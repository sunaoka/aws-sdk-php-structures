<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetBasePathMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $basePath
 * @property string $restApiId
 * @property string $stage
 */
class BasePathMapping extends Shape
{
    /**
     * @param array{
     *     basePath?: string,
     *     restApiId?: string,
     *     stage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
