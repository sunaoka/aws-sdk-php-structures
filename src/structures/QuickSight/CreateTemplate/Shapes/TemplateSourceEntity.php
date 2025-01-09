<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemplateSourceAnalysis $SourceAnalysis
 * @property TemplateSourceTemplate $SourceTemplate
 */
class TemplateSourceEntity extends Shape
{
    /**
     * @param array{
     *     SourceAnalysis?: TemplateSourceAnalysis,
     *     SourceTemplate?: TemplateSourceTemplate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
