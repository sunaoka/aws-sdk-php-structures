<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Prefix
 * @property string $KeyPattern
 */
class IngestionS3InputConfiguration extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix?: string,
     *     KeyPattern?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
