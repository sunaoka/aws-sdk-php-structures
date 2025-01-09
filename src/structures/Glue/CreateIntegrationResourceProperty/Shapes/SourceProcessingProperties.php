<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationResourceProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 */
class SourceProcessingProperties extends Shape
{
    /**
     * @param array{RoleArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
