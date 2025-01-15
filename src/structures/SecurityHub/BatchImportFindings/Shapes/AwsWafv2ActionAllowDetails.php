<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2CustomRequestHandlingDetails|null $CustomRequestHandling
 */
class AwsWafv2ActionAllowDetails extends Shape
{
    /**
     * @param array{CustomRequestHandling?: AwsWafv2CustomRequestHandlingDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
