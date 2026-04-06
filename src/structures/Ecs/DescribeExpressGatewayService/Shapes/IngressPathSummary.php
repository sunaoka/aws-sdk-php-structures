<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeExpressGatewayService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC'|'PRIVATE' $accessType
 * @property string $endpoint
 */
class IngressPathSummary extends Shape
{
    /**
     * @param array{
     *     accessType: 'PUBLIC'|'PRIVATE',
     *     endpoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
