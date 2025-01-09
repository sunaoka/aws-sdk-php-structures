<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemediationRecommendation $recommendation
 */
class Remediation extends Shape
{
    /**
     * @param array{recommendation?: RemediationRecommendation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
