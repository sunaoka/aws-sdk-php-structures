<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ResourceManagerApplicationIds
 * @property string|null $ResourceManager
 */
class StepAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     ResourceManagerApplicationIds?: list<string>|null,
     *     ResourceManager?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
