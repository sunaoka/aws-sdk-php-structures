<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $code
 * @property string|null $message
 */
class MigrationError extends Shape
{
    /**
     * @param array{
     *     code?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
