<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2ActionAllowDetails $Allow
 * @property AwsWafv2ActionBlockDetails $Block
 */
class AwsWafv2WebAclActionDetails extends Shape
{
    /**
     * @param array{
     *     Allow?: AwsWafv2ActionAllowDetails,
     *     Block?: AwsWafv2ActionBlockDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
