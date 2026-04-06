<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPreviewParametersInput|null $differentialPrivacy
 */
class PreviewPrivacyImpactParametersInput extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyPreviewParametersInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
