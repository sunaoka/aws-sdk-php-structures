<?php

namespace Sunaoka\Aws\Structures\Ses\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateName
 * @property string|null $SubjectPart
 * @property string|null $TextPart
 * @property string|null $HtmlPart
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateName: string,
     *     SubjectPart?: string|null,
     *     TextPart?: string|null,
     *     HtmlPart?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
