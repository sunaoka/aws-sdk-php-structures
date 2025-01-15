<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2CustomResponseDetails|null $CustomResponse
 */
class AwsWafv2ActionBlockDetails extends Shape
{
    /**
     * @param array{CustomResponse?: AwsWafv2CustomResponseDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
