<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GlueDataSource $glueDataSource
 */
class DataSource extends Shape
{
    /**
     * @param array{glueDataSource: GlueDataSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
