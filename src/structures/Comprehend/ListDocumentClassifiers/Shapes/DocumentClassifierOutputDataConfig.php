<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Uri
 * @property string|null $KmsKeyId
 * @property string|null $FlywheelStatsS3Prefix
 */
class DocumentClassifierOutputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri?: string|null,
     *     KmsKeyId?: string|null,
     *     FlywheelStatsS3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
