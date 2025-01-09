<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CallerReference
 * @property S3Origin $S3Origin
 * @property Aliases $Aliases
 * @property string $Comment
 * @property StreamingLoggingConfig $Logging
 * @property TrustedSigners $TrustedSigners
 * @property 'PriceClass_100'|'PriceClass_200'|'PriceClass_All' $PriceClass
 * @property bool $Enabled
 */
class StreamingDistributionConfig extends Shape
{
    /**
     * @param array{
     *     CallerReference: string,
     *     S3Origin: S3Origin,
     *     Aliases?: Aliases,
     *     Comment: string,
     *     Logging?: StreamingLoggingConfig,
     *     TrustedSigners: TrustedSigners,
     *     PriceClass?: 'PriceClass_100'|'PriceClass_200'|'PriceClass_All',
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
