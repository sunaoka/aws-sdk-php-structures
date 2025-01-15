<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3BucketName
 * @property string|null $S3KeyName
 */
class S3ExportingConfig extends Shape
{
    /**
     * @param array{
     *     S3BucketName: string,
     *     S3KeyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
