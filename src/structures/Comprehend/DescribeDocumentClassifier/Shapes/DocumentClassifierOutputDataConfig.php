<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDocumentClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $KmsKeyId
 * @property string $FlywheelStatsS3Prefix
 */
class DocumentClassifierOutputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string,
     *     KmsKeyId?: string,
     *     FlywheelStatsS3Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
