<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPipelineExecutionSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 */
class AssociationInfo extends Shape
{
    /**
     * @param array{
     *     SourceArn: string,
     *     DestinationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
