<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTION'|'DETECTION_AND_REDACTION'|'DISABLED' $DetectionMode
 * @property PIIEntitiesConfiguration|null $PiiEntitiesConfiguration
 */
class SensitiveDataConfiguration extends Shape
{
    /**
     * @param array{
     *     DetectionMode: 'DETECTION'|'DETECTION_AND_REDACTION'|'DISABLED',
     *     PiiEntitiesConfiguration?: PIIEntitiesConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
