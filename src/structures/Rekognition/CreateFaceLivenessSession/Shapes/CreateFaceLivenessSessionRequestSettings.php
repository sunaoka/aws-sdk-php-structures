<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LivenessOutputConfig $OutputConfig
 * @property int<0, 4> $AuditImagesLimit
 */
class CreateFaceLivenessSessionRequestSettings extends Shape
{
    /**
     * @param array{
     *     OutputConfig?: LivenessOutputConfig,
     *     AuditImagesLimit?: int<0, 4>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
