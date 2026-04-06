<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListStreamingDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ARN
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $DomainName
 * @property S3Origin $S3Origin
 * @property Aliases $Aliases
 * @property TrustedSigners $TrustedSigners
 * @property string $Comment
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|'None' $PriceClass
 * @property bool $Enabled
 */
class StreamingDistributionSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ARN: string,
     *     Status: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     DomainName: string,
     *     S3Origin: S3Origin,
     *     Aliases: Aliases,
     *     TrustedSigners: TrustedSigners,
     *     Comment: string,
     *     PriceClass: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|'None',
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
