<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImagePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH' $maximumSeverityLabel
 * @property bool|null $fixAvailable
 */
class ScanResultCondition extends Shape
{
    /**
     * @param array{
     *     maximumSeverityLabel: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH',
     *     fixAvailable?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
