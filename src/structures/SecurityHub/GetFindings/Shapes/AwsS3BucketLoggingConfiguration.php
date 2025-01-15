<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationBucketName
 * @property string|null $LogFilePrefix
 */
class AwsS3BucketLoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationBucketName?: string|null,
     *     LogFilePrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
