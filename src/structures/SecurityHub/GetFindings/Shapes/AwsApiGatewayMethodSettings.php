<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $MetricsEnabled
 * @property string|null $LoggingLevel
 * @property bool|null $DataTraceEnabled
 * @property int|null $ThrottlingBurstLimit
 * @property double|null $ThrottlingRateLimit
 * @property bool|null $CachingEnabled
 * @property int|null $CacheTtlInSeconds
 * @property bool|null $CacheDataEncrypted
 * @property bool|null $RequireAuthorizationForCacheControl
 * @property string|null $UnauthorizedCacheControlHeaderStrategy
 * @property string|null $HttpMethod
 * @property string|null $ResourcePath
 */
class AwsApiGatewayMethodSettings extends Shape
{
    /**
     * @param array{
     *     MetricsEnabled?: bool|null,
     *     LoggingLevel?: string|null,
     *     DataTraceEnabled?: bool|null,
     *     ThrottlingBurstLimit?: int|null,
     *     ThrottlingRateLimit?: double|null,
     *     CachingEnabled?: bool|null,
     *     CacheTtlInSeconds?: int|null,
     *     CacheDataEncrypted?: bool|null,
     *     RequireAuthorizationForCacheControl?: bool|null,
     *     UnauthorizedCacheControlHeaderStrategy?: string|null,
     *     HttpMethod?: string|null,
     *     ResourcePath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
