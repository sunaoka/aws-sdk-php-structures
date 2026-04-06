<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetMatchingWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputSourceARN
 * @property string $schemaName
 * @property bool|null $applyNormalization
 */
class InputSource extends Shape
{
    /**
     * @param array{
     *     inputSourceARN: string,
     *     schemaName: string,
     *     applyNormalization?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
