<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteRemediationExceptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 */
class RemediationExceptionResourceKey extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     ResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
