<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchDeleteImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageIdentifier $imageId
 * @property 'InvalidImageDigest'|'InvalidImageTag'|'ImageTagDoesNotMatchDigest'|'ImageNotFound'|'MissingDigestAndTag'|'ImageReferencedByManifestList'|'KmsError'|'UpstreamAccessDenied'|'UpstreamTooManyRequests'|'UpstreamUnavailable' $failureCode
 * @property string $failureReason
 */
class ImageFailure extends Shape
{
    /**
     * @param array{
     *     imageId?: ImageIdentifier,
     *     failureCode?: 'InvalidImageDigest'|'InvalidImageTag'|'ImageTagDoesNotMatchDigest'|'ImageNotFound'|'MissingDigestAndTag'|'ImageReferencedByManifestList'|'KmsError'|'UpstreamAccessDenied'|'UpstreamTooManyRequests'|'UpstreamUnavailable',
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
