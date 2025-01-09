<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $applyNormalization
 * @property string $inputSourceARN
 * @property string $schemaName
 */
class InputSource extends Shape
{
    /**
     * @param array{
     *     applyNormalization?: bool,
     *     inputSourceARN: string,
     *     schemaName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
