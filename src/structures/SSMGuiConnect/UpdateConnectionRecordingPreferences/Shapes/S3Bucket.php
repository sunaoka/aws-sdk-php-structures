<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\UpdateConnectionRecordingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BucketName
 * @property string $BucketOwner
 */
class S3Bucket extends Shape
{
    /**
     * @param array{
     *     BucketName: string,
     *     BucketOwner: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
