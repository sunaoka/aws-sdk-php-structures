<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $ResourceId
 * @property Compliance $Compliance
 */
class ComplianceByResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     Compliance?: Compliance
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
