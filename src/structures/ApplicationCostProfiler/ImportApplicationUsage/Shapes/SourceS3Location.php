<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\ImportApplicationUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property 'ap-east-1'|'me-south-1'|'eu-south-1'|'af-south-1'|null $region
 */
class SourceS3Location extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     key: string,
     *     region?: 'ap-east-1'|'me-south-1'|'eu-south-1'|'af-south-1'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
