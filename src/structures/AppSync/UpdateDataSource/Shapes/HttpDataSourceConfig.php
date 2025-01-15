<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $endpoint
 * @property AuthorizationConfig|null $authorizationConfig
 */
class HttpDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     endpoint?: string|null,
     *     authorizationConfig?: AuthorizationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
