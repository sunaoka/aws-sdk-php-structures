<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateFaceLivenessSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LivenessOutputConfig|null $OutputConfig
 * @property int<0, 4>|null $AuditImagesLimit
 */
class CreateFaceLivenessSessionRequestSettings extends Shape
{
    /**
     * @param array{
     *     OutputConfig?: LivenessOutputConfig|null,
     *     AuditImagesLimit?: int<0, 4>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
