<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DataTraceEnabled
 * @property bool $DetailedMetricsEnabled
 * @property 'ERROR'|'INFO'|'OFF' $LoggingLevel
 * @property int $ThrottlingBurstLimit
 * @property double $ThrottlingRateLimit
 */
class RouteSettings extends Shape
{
    /**
     * @param array{
     *     DataTraceEnabled?: bool,
     *     DetailedMetricsEnabled?: bool,
     *     LoggingLevel?: 'ERROR'|'INFO'|'OFF',
     *     ThrottlingBurstLimit?: int,
     *     ThrottlingRateLimit?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
