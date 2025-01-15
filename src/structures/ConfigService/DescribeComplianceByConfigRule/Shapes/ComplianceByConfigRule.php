<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigRuleName
 * @property Compliance|null $Compliance
 */
class ComplianceByConfigRule extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string|null,
     *     Compliance?: Compliance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
