<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'XSLT'|'JSONATA' $templateLanguage
 * @property string|null $template
 */
class Mapping extends Shape
{
    /**
     * @param array{
     *     templateLanguage: 'XSLT'|'JSONATA',
     *     template?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
