<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCloudFrontOriginAccessIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $S3CanonicalUserId
 * @property CloudFrontOriginAccessIdentityConfig|null $CloudFrontOriginAccessIdentityConfig
 */
class CloudFrontOriginAccessIdentity extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     S3CanonicalUserId: string,
     *     CloudFrontOriginAccessIdentityConfig?: CloudFrontOriginAccessIdentityConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
