<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $MetricsEnabled
 * @property string $LoggingLevel
 * @property bool $DataTraceEnabled
 * @property int $ThrottlingBurstLimit
 * @property double $ThrottlingRateLimit
 * @property bool $CachingEnabled
 * @property int $CacheTtlInSeconds
 * @property bool $CacheDataEncrypted
 * @property bool $RequireAuthorizationForCacheControl
 * @property string $UnauthorizedCacheControlHeaderStrategy
 * @property string $HttpMethod
 * @property string $ResourcePath
 */
class AwsApiGatewayMethodSettings extends Shape
{
    /**
     * @param array{
     *     MetricsEnabled?: bool,
     *     LoggingLevel?: string,
     *     DataTraceEnabled?: bool,
     *     ThrottlingBurstLimit?: int,
     *     ThrottlingRateLimit?: double,
     *     CachingEnabled?: bool,
     *     CacheTtlInSeconds?: int,
     *     CacheDataEncrypted?: bool,
     *     RequireAuthorizationForCacheControl?: bool,
     *     UnauthorizedCacheControlHeaderStrategy?: string,
     *     HttpMethod?: string,
     *     ResourcePath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
