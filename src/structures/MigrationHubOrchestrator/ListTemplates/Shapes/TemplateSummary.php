<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $arn
 * @property string $description
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     arn?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
