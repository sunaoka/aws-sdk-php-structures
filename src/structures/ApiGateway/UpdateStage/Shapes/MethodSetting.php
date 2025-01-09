<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $metricsEnabled
 * @property string $loggingLevel
 * @property bool $dataTraceEnabled
 * @property int $throttlingBurstLimit
 * @property double $throttlingRateLimit
 * @property bool $cachingEnabled
 * @property int $cacheTtlInSeconds
 * @property bool $cacheDataEncrypted
 * @property bool $requireAuthorizationForCacheControl
 * @property 'FAIL_WITH_403'|'SUCCEED_WITH_RESPONSE_HEADER'|'SUCCEED_WITHOUT_RESPONSE_HEADER' $unauthorizedCacheControlHeaderStrategy
 */
class MethodSetting extends Shape
{
    /**
     * @param array{
     *     metricsEnabled?: bool,
     *     loggingLevel?: string,
     *     dataTraceEnabled?: bool,
     *     throttlingBurstLimit?: int,
     *     throttlingRateLimit?: double,
     *     cachingEnabled?: bool,
     *     cacheTtlInSeconds?: int,
     *     cacheDataEncrypted?: bool,
     *     requireAuthorizationForCacheControl?: bool,
     *     unauthorizedCacheControlHeaderStrategy?: 'FAIL_WITH_403'|'SUCCEED_WITH_RESPONSE_HEADER'|'SUCCEED_WITHOUT_RESPONSE_HEADER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
