<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiId
 * @property string $ApiMappingId
 * @property string $ApiMappingKey
 * @property string $Stage
 */
class ApiMapping extends Shape
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiMappingId?: string,
     *     ApiMappingKey?: string,
     *     Stage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
