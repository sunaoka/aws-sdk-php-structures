<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ImmunityTime
 */
class AwsWafv2WebAclCaptchaConfigImmunityTimePropertyDetails extends Shape
{
    /**
     * @param array{ImmunityTime?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
