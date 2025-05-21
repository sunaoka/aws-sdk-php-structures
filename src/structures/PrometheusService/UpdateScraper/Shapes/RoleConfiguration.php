<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateScraper\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceRoleArn
 * @property string|null $targetRoleArn
 */
class RoleConfiguration extends Shape
{
    /**
     * @param array{
     *     sourceRoleArn?: string|null,
     *     targetRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
