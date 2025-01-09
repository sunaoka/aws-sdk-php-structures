<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $ResourceId
 */
class RemediationExceptionResourceKey extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string,
     *     ResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
