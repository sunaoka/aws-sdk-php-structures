<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeComplianceByResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property Compliance|null $Compliance
 */
class ComplianceByResource extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     Compliance?: Compliance|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
