<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTION'|'DETECTION_AND_REDACTION' $detectionMode
 * @property list<'STANDARD'|'CUSTOM'>|null $detectionScope
 * @property PIIEntitiesConfiguration|null $piiEntitiesConfiguration
 */
class SensitiveDataConfiguration extends Shape
{
    /**
     * @param array{
     *     detectionMode: 'DETECTION'|'DETECTION_AND_REDACTION',
     *     detectionScope?: list<'STANDARD'|'CUSTOM'>|null,
     *     piiEntitiesConfiguration?: PIIEntitiesConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
