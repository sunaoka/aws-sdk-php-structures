<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationId
 * @property string|null $ComponentId
 * @property string|null $DatabaseId
 * @property 'SYSTEM'|'TENANT'|null $DatabaseType
 * @property string|null $Arn
 * @property array<string, string>|null $Tags
 */
class DatabaseSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ComponentId?: string|null,
     *     DatabaseId?: string|null,
     *     DatabaseType?: 'SYSTEM'|'TENANT'|null,
     *     Arn?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
