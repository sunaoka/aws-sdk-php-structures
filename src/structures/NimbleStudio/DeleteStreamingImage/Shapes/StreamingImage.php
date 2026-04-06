<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStreamingImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $description
 * @property string|null $ec2ImageId
 * @property StreamingImageEncryptionConfiguration|null $encryptionConfiguration
 * @property list<string>|null $eulaIds
 * @property string|null $name
 * @property string|null $owner
 * @property string|null $platform
 * @property 'CREATE_IN_PROGRESS'|'READY'|'DELETE_IN_PROGRESS'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'CREATE_FAILED'|'DELETE_FAILED'|null $state
 * @property 'STREAMING_IMAGE_CREATE_IN_PROGRESS'|'STREAMING_IMAGE_READY'|'STREAMING_IMAGE_DELETE_IN_PROGRESS'|'STREAMING_IMAGE_DELETED'|'STREAMING_IMAGE_UPDATE_IN_PROGRESS'|'INTERNAL_ERROR'|'ACCESS_DENIED'|null $statusCode
 * @property string|null $statusMessage
 * @property string|null $streamingImageId
 * @property array<string, string>|null $tags
 */
class StreamingImage extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     description?: string|null,
     *     ec2ImageId?: string|null,
     *     encryptionConfiguration?: StreamingImageEncryptionConfiguration|null,
     *     eulaIds?: list<string>|null,
     *     name?: string|null,
     *     owner?: string|null,
     *     platform?: string|null,
     *     state?: 'CREATE_IN_PROGRESS'|'READY'|'DELETE_IN_PROGRESS'|'DELETED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'CREATE_FAILED'|'DELETE_FAILED'|null,
     *     statusCode?: 'STREAMING_IMAGE_CREATE_IN_PROGRESS'|'STREAMING_IMAGE_READY'|'STREAMING_IMAGE_DELETE_IN_PROGRESS'|'STREAMING_IMAGE_DELETED'|'STREAMING_IMAGE_UPDATE_IN_PROGRESS'|'INTERNAL_ERROR'|'ACCESS_DENIED'|null,
     *     statusMessage?: string|null,
     *     streamingImageId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
