<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $metricsEnabled
 * @property string|null $loggingLevel
 * @property bool|null $dataTraceEnabled
 * @property int|null $throttlingBurstLimit
 * @property double|null $throttlingRateLimit
 * @property bool|null $cachingEnabled
 * @property int|null $cacheTtlInSeconds
 * @property bool|null $cacheDataEncrypted
 * @property bool|null $requireAuthorizationForCacheControl
 * @property 'FAIL_WITH_403'|'SUCCEED_WITH_RESPONSE_HEADER'|'SUCCEED_WITHOUT_RESPONSE_HEADER'|null $unauthorizedCacheControlHeaderStrategy
 */
class MethodSetting extends Shape
{
    /**
     * @param array{
     *     metricsEnabled?: bool|null,
     *     loggingLevel?: string|null,
     *     dataTraceEnabled?: bool|null,
     *     throttlingBurstLimit?: int|null,
     *     throttlingRateLimit?: double|null,
     *     cachingEnabled?: bool|null,
     *     cacheTtlInSeconds?: int|null,
     *     cacheDataEncrypted?: bool|null,
     *     requireAuthorizationForCacheControl?: bool|null,
     *     unauthorizedCacheControlHeaderStrategy?: 'FAIL_WITH_403'|'SUCCEED_WITH_RESPONSE_HEADER'|'SUCCEED_WITHOUT_RESPONSE_HEADER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
