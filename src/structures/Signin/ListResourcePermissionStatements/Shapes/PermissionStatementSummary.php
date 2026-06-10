<?php

namespace Sunaoka\Aws\Structures\Signin\ListResourcePermissionStatements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sid
 * @property array<string, array<string, list<string>>>|null $condition
 */
class PermissionStatementSummary extends Shape
{
    /**
     * @param array{
     *     sid: string,
     *     condition?: array<string, array<string, list<string>>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
