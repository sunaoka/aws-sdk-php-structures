<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TemplateResponse> $Item
 * @property string|null $NextToken
 */
class TemplatesResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<TemplateResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
