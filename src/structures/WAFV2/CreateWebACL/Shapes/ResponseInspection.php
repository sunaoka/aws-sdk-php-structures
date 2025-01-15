<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseInspectionStatusCode|null $StatusCode
 * @property ResponseInspectionHeader|null $Header
 * @property ResponseInspectionBodyContains|null $BodyContains
 * @property ResponseInspectionJson|null $Json
 */
class ResponseInspection extends Shape
{
    /**
     * @param array{
     *     StatusCode?: ResponseInspectionStatusCode|null,
     *     Header?: ResponseInspectionHeader|null,
     *     BodyContains?: ResponseInspectionBodyContains|null,
     *     Json?: ResponseInspectionJson|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
