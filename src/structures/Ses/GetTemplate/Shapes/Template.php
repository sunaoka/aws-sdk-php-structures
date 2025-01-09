<?php

namespace Sunaoka\Aws\Structures\Ses\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string $SubjectPart
 * @property string $TextPart
 * @property string $HtmlPart
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateName: string,
     *     SubjectPart?: string,
     *     TextPart?: string,
     *     HtmlPart?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
