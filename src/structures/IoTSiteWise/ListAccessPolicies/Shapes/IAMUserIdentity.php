<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class IAMUserIdentity extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
