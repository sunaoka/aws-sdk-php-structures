<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\StartHumanLoop\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FreeOfPersonallyIdentifiableInformation'|'FreeOfAdultContent'> $ContentClassifiers
 */
class HumanLoopDataAttributes extends Shape
{
    /**
     * @param array{ContentClassifiers: list<'FreeOfPersonallyIdentifiableInformation'|'FreeOfAdultContent'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
