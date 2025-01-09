<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SipMediaApplicationId
 * @property int<1, max> $Priority
 * @property string $AwsRegion
 */
class SipRuleTargetApplication extends Shape
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string,
     *     Priority?: int<1, max>,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
