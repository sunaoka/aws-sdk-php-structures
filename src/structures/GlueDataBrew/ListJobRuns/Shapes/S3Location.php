<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string|null $Key
 * @property string|null $BucketOwner
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key?: string|null,
     *     BucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
