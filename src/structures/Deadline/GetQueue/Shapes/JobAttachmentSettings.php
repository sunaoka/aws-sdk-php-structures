<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string $rootPrefix
 */
class JobAttachmentSettings extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     rootPrefix: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
