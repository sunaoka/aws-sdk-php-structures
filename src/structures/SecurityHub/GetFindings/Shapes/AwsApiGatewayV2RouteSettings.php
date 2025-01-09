<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DetailedMetricsEnabled
 * @property string $LoggingLevel
 * @property bool $DataTraceEnabled
 * @property int $ThrottlingBurstLimit
 * @property double $ThrottlingRateLimit
 */
class AwsApiGatewayV2RouteSettings extends Shape
{
    /**
     * @param array{
     *     DetailedMetricsEnabled?: bool,
     *     LoggingLevel?: string,
     *     DataTraceEnabled?: bool,
     *     ThrottlingBurstLimit?: int,
     *     ThrottlingRateLimit?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
