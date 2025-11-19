<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageIdentifier|null $imageId
 * @property 'InvalidImageDigest'|'InvalidImageTag'|'ImageTagDoesNotMatchDigest'|'ImageNotFound'|'MissingDigestAndTag'|'ImageReferencedByManifestList'|'KmsError'|'UpstreamAccessDenied'|'UpstreamTooManyRequests'|'UpstreamUnavailable'|'ImageInaccessible'|null $failureCode
 * @property string|null $failureReason
 */
class ImageFailure extends Shape
{
    /**
     * @param array{
     *     imageId?: ImageIdentifier|null,
     *     failureCode?: 'InvalidImageDigest'|'InvalidImageTag'|'ImageTagDoesNotMatchDigest'|'ImageNotFound'|'MissingDigestAndTag'|'ImageReferencedByManifestList'|'KmsError'|'UpstreamAccessDenied'|'UpstreamTooManyRequests'|'UpstreamUnavailable'|'ImageInaccessible'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
