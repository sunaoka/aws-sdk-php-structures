<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApiMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApiId
 * @property string|null $ApiMappingId
 * @property string|null $ApiMappingKey
 * @property string $Stage
 */
class ApiMapping extends Shape
{
    /**
     * @param array{
     *     ApiId: string,
     *     ApiMappingId?: string|null,
     *     ApiMappingKey?: string|null,
     *     Stage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
