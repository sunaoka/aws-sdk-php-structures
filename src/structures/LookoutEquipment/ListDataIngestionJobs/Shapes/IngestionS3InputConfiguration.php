<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDataIngestionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $Prefix
 * @property string|null $KeyPattern
 */
class IngestionS3InputConfiguration extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Prefix?: string|null,
     *     KeyPattern?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
