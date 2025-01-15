<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string $DomainName
 * @property ActiveTrustedSigners $ActiveTrustedSigners
 * @property StreamingDistributionConfig $StreamingDistributionConfig
 */
class StreamingDistribution extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ARN: string,
     *     Status: string,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     DomainName: string,
     *     ActiveTrustedSigners: ActiveTrustedSigners,
     *     StreamingDistributionConfig: StreamingDistributionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
