<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ImmunityTime
 */
class AwsWafv2WebAclCaptchaConfigImmunityTimePropertyDetails extends Shape
{
    /**
     * @param array{ImmunityTime?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
