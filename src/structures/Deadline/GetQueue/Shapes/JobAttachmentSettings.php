<?php

namespace Sunaoka\Aws\Structures\Deadline\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $rootPrefix
 * @property string $s3BucketName
 */
class JobAttachmentSettings extends Shape
{
    /**
     * @param array{
     *     rootPrefix: string,
     *     s3BucketName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
