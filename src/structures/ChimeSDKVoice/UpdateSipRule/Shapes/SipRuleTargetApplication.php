<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateSipRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SipMediaApplicationId
 * @property int<1, max>|null $Priority
 * @property string|null $AwsRegion
 */
class SipRuleTargetApplication extends Shape
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string|null,
     *     Priority?: int<1, max>|null,
     *     AwsRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
