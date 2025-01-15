<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2ActionAllowDetails|null $Allow
 * @property AwsWafv2ActionBlockDetails|null $Block
 */
class AwsWafv2WebAclActionDetails extends Shape
{
    /**
     * @param array{
     *     Allow?: AwsWafv2ActionAllowDetails|null,
     *     Block?: AwsWafv2ActionBlockDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
