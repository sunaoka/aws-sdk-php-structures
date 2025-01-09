<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LivenessOutputConfig $OutputConfig
 * @property int $AuditImagesLimit
 */
class CreateFaceLivenessSessionRequestSettings extends Shape
{
    /**
     * @param array{
     *     OutputConfig?: LivenessOutputConfig,
     *     AuditImagesLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
