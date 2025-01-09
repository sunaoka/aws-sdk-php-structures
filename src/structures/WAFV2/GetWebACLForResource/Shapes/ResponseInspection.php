<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseInspectionStatusCode $StatusCode
 * @property ResponseInspectionHeader $Header
 * @property ResponseInspectionBodyContains $BodyContains
 * @property ResponseInspectionJson $Json
 */
class ResponseInspection extends Shape
{
    /**
     * @param array{
     *     StatusCode?: ResponseInspectionStatusCode,
     *     Header?: ResponseInspectionHeader,
     *     BodyContains?: ResponseInspectionBodyContains,
     *     Json?: ResponseInspectionJson
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
