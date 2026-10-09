<?php

namespace Sunaoka\Aws\Structures\SecurityHub\StartExportJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketArn
 * @property string $KmsKeyArn
 * @property string|null $ObjectPrefix
 */
class S3ExportDestination extends Shape
{
    /**
     * @param array{
     *     BucketArn: string,
     *     KmsKeyArn: string,
     *     ObjectPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
