<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2CustomResponseDetails $CustomResponse
 */
class AwsWafv2ActionBlockDetails extends Shape
{
    /**
     * @param array{CustomResponse?: AwsWafv2CustomResponseDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
