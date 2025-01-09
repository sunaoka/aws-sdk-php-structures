<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubContentArn
 */
class InferenceHubAccessConfig extends Shape
{
    /**
     * @param array{HubContentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
