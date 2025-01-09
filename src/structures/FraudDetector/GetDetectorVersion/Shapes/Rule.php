<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectorVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $detectorId
 * @property string $ruleId
 * @property string $ruleVersion
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     detectorId: string,
     *     ruleId: string,
     *     ruleVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
