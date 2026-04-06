<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'z/OS-DB2' $type
 * @property 'Precisely'|'AWS DMS' $captureTool
 */
class SourceDatabaseMetadata extends Shape
{
    /**
     * @param array{
     *     type: 'z/OS-DB2',
     *     captureTool: 'Precisely'|'AWS DMS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
