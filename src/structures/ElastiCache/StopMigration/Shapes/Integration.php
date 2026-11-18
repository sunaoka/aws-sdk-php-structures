<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StopMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'dynamodb'|null $IntegrationType
 * @property 'enabled'|'disabled'|'enabling'|'disabling'|'failed'|null $Status
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     IntegrationType?: 'dynamodb'|null,
     *     Status?: 'enabled'|'disabled'|'enabling'|'disabling'|'failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
