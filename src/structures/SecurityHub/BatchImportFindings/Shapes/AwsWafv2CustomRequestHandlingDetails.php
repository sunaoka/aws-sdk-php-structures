<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsWafv2CustomHttpHeader> $InsertHeaders
 */
class AwsWafv2CustomRequestHandlingDetails extends Shape
{
    /**
     * @param array{InsertHeaders?: list<AwsWafv2CustomHttpHeader>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
