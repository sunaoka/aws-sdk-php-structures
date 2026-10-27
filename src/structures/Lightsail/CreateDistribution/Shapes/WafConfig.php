<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isWafEnabled
 * @property list<WafRule>|null $wafRules
 */
class WafConfig extends Shape
{
    /**
     * @param array{
     *     isWafEnabled?: bool|null,
     *     wafRules?: list<WafRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
