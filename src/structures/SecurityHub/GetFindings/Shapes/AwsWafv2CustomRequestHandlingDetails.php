<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsWafv2CustomHttpHeader>|null $InsertHeaders
 */
class AwsWafv2CustomRequestHandlingDetails extends Shape
{
    /**
     * @param array{InsertHeaders?: list<AwsWafv2CustomHttpHeader>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
