<?php

namespace Sunaoka\Aws\Structures\Chime\GetSipRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SipMediaApplicationId
 * @property int $Priority
 * @property string $AwsRegion
 */
class SipRuleTargetApplication extends Shape
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string,
     *     Priority?: int,
     *     AwsRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
