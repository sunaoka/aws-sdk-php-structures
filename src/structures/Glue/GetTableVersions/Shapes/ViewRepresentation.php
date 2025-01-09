<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK' $Dialect
 * @property string $DialectVersion
 * @property string $ViewOriginalText
 * @property string $ViewExpandedText
 * @property string $ValidationConnection
 * @property bool $IsStale
 */
class ViewRepresentation extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK',
     *     DialectVersion?: string,
     *     ViewOriginalText?: string,
     *     ViewExpandedText?: string,
     *     ValidationConnection?: string,
     *     IsStale?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
