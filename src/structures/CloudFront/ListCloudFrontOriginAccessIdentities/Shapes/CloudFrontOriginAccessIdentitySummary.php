<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListCloudFrontOriginAccessIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $S3CanonicalUserId
 * @property string $Comment
 */
class CloudFrontOriginAccessIdentitySummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     S3CanonicalUserId: string,
     *     Comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
