<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentActionGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3BucketName
 * @property string|null $s3ObjectKey
 */
class S3Identifier extends Shape
{
    /**
     * @param array{
     *     s3BucketName?: string|null,
     *     s3ObjectKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
