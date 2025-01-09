<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string $s3ObjectKey
 */
class S3Identifier extends Shape
{
    /**
     * @param array{
     *     s3BucketName?: string,
     *     s3ObjectKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
