<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredTableMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK' $Dialect
 * @property string $DialectVersion
 */
class SupportedDialect extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK',
     *     DialectVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
