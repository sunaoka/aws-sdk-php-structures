<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $ComponentId
 * @property string $DatabaseId
 * @property 'SYSTEM'|'TENANT' $DatabaseType
 * @property string $Arn
 * @property array<string, string> $Tags
 */
class DatabaseSummary extends Shape
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ComponentId?: string,
     *     DatabaseId?: string,
     *     DatabaseType?: 'SYSTEM'|'TENANT',
     *     Arn?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
