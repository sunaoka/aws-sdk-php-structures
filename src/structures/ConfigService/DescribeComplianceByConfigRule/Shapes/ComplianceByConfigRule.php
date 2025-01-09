<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property Compliance $Compliance
 */
class ComplianceByConfigRule extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string,
     *     Compliance?: Compliance
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
