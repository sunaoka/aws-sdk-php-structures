<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK' $Dialect
 * @property string $DialectVersion
 * @property string $ViewOriginalText
 * @property string $ValidationConnection
 * @property string $ViewExpandedText
 */
class ViewRepresentationInput extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK',
     *     DialectVersion?: string,
     *     ViewOriginalText?: string,
     *     ValidationConnection?: string,
     *     ViewExpandedText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
