<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property AuthorizationConfig $authorizationConfig
 */
class HttpDataSourceConfig extends Shape
{
    /**
     * @param array{
     *     endpoint?: string,
     *     authorizationConfig?: AuthorizationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
