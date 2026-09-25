<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SDKType
 */
class SessionMetadata extends Shape
{
    /**
     * @param array{SDKType: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
