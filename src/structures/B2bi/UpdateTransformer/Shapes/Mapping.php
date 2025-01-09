<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'XSLT'|'JSONATA' $templateLanguage
 * @property string $template
 */
class Mapping extends Shape
{
    /**
     * @param array{
     *     templateLanguage: 'XSLT'|'JSONATA',
     *     template?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
