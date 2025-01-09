<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPrivacyImpact $differentialPrivacy
 */
class PrivacyImpact extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyPrivacyImpact} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
