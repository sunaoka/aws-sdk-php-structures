<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregateComplianceByConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigRuleName
 * @property Compliance|null $Compliance
 * @property string|null $AccountId
 * @property string|null $AwsRegion
 */
class AggregateComplianceByConfigRule extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string|null,
     *     Compliance?: Compliance|null,
     *     AccountId?: string|null,
     *     AwsRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
