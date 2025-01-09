<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsKmsKeyId
 * @property string $AwsKmsEncryptionContext
 */
class SseAwsKeyManagementParams extends Shape
{
    /**
     * @param array{
     *     AwsKmsKeyId: string,
     *     AwsKmsEncryptionContext?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
