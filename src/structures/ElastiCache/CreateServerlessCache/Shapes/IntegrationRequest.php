<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'dynamodb'|null $IntegrationType
 */
class IntegrationRequest extends Shape
{
    /**
     * @param array{IntegrationType?: 'dynamodb'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
