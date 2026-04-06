<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK'|null $Dialect
 * @property string|null $DialectVersion
 */
class SupportedDialect extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK'|null,
     *     DialectVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
