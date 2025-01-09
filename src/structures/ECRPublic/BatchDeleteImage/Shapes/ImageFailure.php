<?php

namespace Sunaoka\Aws\Structures\ECRPublic\BatchDeleteImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImageIdentifier $imageId
 * @property 'InvalidImageDigest'|'InvalidImageTag'|'ImageTagDoesNotMatchDigest'|'ImageNotFound'|'MissingDigestAndTag'|'ImageReferencedByManifestList'|'KmsError' $failureCode
 * @property string $failureReason
 */
class ImageFailure extends Shape
{
    /**
     * @param array{
     *     imageId?: ImageIdentifier,
     *     failureCode?: 'InvalidImageDigest'|'InvalidImageTag'|'ImageTagDoesNotMatchDigest'|'ImageNotFound'|'MissingDigestAndTag'|'ImageReferencedByManifestList'|'KmsError',
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
