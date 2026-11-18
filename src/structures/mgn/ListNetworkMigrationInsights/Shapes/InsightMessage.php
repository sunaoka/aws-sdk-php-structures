<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $message
 * @property string|null $topic
 */
class InsightMessage extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     message?: string|null,
     *     topic?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
