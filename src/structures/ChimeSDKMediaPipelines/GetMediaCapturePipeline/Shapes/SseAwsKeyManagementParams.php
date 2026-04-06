<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsKmsKeyId
 * @property string|null $AwsKmsEncryptionContext
 */
class SseAwsKeyManagementParams extends Shape
{
    /**
     * @param array{
     *     AwsKmsKeyId: string,
     *     AwsKmsEncryptionContext?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
