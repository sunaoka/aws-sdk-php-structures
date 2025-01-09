<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationBucketName
 * @property string $LogFilePrefix
 */
class AwsS3BucketLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationBucketName?: string,
     *     LogFilePrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
