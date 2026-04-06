<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPrivacyImpact|null $differentialPrivacy
 */
class PrivacyImpact extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyPrivacyImpact|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
