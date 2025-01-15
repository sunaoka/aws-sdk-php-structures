<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DataTraceEnabled
 * @property bool|null $DetailedMetricsEnabled
 * @property 'ERROR'|'INFO'|'OFF'|null $LoggingLevel
 * @property int|null $ThrottlingBurstLimit
 * @property double|null $ThrottlingRateLimit
 */
class RouteSettings extends Shape
{
    /**
     * @param array{
     *     DataTraceEnabled?: bool|null,
     *     DetailedMetricsEnabled?: bool|null,
     *     LoggingLevel?: 'ERROR'|'INFO'|'OFF'|null,
     *     ThrottlingBurstLimit?: int|null,
     *     ThrottlingRateLimit?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
