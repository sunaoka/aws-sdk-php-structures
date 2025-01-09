<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DomainName
 * @property string $OriginAccessIdentity
 */
class S3Origin extends Shape
{
    /**
     * @param array{
     *     DomainName: string,
     *     OriginAccessIdentity: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
