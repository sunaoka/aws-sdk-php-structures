<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetricsSource|null $Constraints
 * @property FileSource|null $ConfigFile
 */
class DriftCheckExplainability extends Shape
{
    /**
     * @param array{
     *     Constraints?: MetricsSource|null,
     *     ConfigFile?: FileSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
