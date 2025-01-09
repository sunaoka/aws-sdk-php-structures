<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PostgreSQL' $type
 * @property 'Precisely'|'AWS DMS' $captureTool
 */
class TargetDatabaseMetadata extends Shape
{
    /**
     * @param array{
     *     type: 'PostgreSQL',
     *     captureTool: 'Precisely'|'AWS DMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
