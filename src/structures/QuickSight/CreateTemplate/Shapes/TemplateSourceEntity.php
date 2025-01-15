<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TemplateSourceAnalysis|null $SourceAnalysis
 * @property TemplateSourceTemplate|null $SourceTemplate
 */
class TemplateSourceEntity extends Shape
{
    /**
     * @param array{
     *     SourceAnalysis?: TemplateSourceAnalysis|null,
     *     SourceTemplate?: TemplateSourceTemplate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
