<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DetailedMetricsEnabled
 * @property string|null $LoggingLevel
 * @property bool|null $DataTraceEnabled
 * @property int|null $ThrottlingBurstLimit
 * @property double|null $ThrottlingRateLimit
 */
class AwsApiGatewayV2RouteSettings extends Shape
{
    /**
     * @param array{
     *     DetailedMetricsEnabled?: bool|null,
     *     LoggingLevel?: string|null,
     *     DataTraceEnabled?: bool|null,
     *     ThrottlingBurstLimit?: int|null,
     *     ThrottlingRateLimit?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
