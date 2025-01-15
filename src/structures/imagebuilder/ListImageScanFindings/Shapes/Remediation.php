<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemediationRecommendation|null $recommendation
 */
class Remediation extends Shape
{
    /**
     * @param array{recommendation?: RemediationRecommendation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
