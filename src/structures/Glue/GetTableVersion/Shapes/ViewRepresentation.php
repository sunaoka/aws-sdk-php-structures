<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK'|null $Dialect
 * @property string|null $DialectVersion
 * @property string|null $ViewOriginalText
 * @property string|null $ViewExpandedText
 * @property string|null $ValidationConnection
 * @property bool|null $IsStale
 */
class ViewRepresentation extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK'|null,
     *     DialectVersion?: string|null,
     *     ViewOriginalText?: string|null,
     *     ViewExpandedText?: string|null,
     *     ValidationConnection?: string|null,
     *     IsStale?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
