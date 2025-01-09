<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 */
class GlueStudioSchemaColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
