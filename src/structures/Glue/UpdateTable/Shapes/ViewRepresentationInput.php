<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'ATHENA'|'SPARK'|null $Dialect
 * @property string|null $DialectVersion
 * @property string|null $ViewOriginalText
 * @property string|null $ValidationConnection
 * @property string|null $ViewExpandedText
 */
class ViewRepresentationInput extends Shape
{
    /**
     * @param array{
     *     Dialect?: 'REDSHIFT'|'ATHENA'|'SPARK'|null,
     *     DialectVersion?: string|null,
     *     ViewOriginalText?: string|null,
     *     ValidationConnection?: string|null,
     *     ViewExpandedText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
