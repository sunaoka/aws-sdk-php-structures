<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngestionS3InputConfiguration $S3InputConfiguration
 */
class IngestionInputConfiguration extends Shape
{
    /**
     * @param array{S3InputConfiguration: IngestionS3InputConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
