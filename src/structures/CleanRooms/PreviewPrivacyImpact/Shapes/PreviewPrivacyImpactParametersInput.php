<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DifferentialPrivacyPreviewParametersInput $differentialPrivacy
 */
class PreviewPrivacyImpactParametersInput extends Shape
{
    /**
     * @param array{differentialPrivacy?: DifferentialPrivacyPreviewParametersInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
