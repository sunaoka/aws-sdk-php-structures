<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property S3Origin $S3Origin
 * @property Aliases|null $Aliases
 * @property string $Comment
 * @property StreamingLoggingConfig|null $Logging
 * @property TrustedSigners $TrustedSigners
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|null $PriceClass
 * @property bool $Enabled
 */
class StreamingDistributionConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     S3Origin: S3Origin,
     *     Aliases?: Aliases|null,
     *     Comment: string,
     *     Logging?: StreamingLoggingConfig|null,
     *     TrustedSigners: TrustedSigners,
     *     PriceClass?: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All'|null,
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
