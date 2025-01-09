<?php

namespace Sunaoka\Aws\Structures\Ses\ListTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class TemplateMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
