<?php

namespace Sunaoka\Aws\Structures\Textract\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SummarizationConfiguration|null $Summarization
 * @property FigureCaptionConfiguration|null $FigureCaption
 */
class GenerativeConfiguration extends Shape
{
    /**
     * @param array{
     *     Summarization?: SummarizationConfiguration|null,
     *     FigureCaption?: FigureCaptionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
