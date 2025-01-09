<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERACTIONS' $type
 * @property DatasetInputConfig $inputConfig
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     type: 'INTERACTIONS',
     *     inputConfig: DatasetInputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
