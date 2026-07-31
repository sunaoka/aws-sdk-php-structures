<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testTemplateArn
 * @property string $name
 * @property string $description
 */
class TestTemplateSummary extends Shape
{
    /**
     * @param array{
     *     testTemplateArn: string,
     *     name: string,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
