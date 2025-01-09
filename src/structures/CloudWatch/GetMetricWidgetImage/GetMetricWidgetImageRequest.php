<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricWidgetImage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricWidget
 * @property string $OutputFormat
 */
class GetMetricWidgetImageRequest extends Request
{
    /**
     * @param array{
     *     MetricWidget: string,
     *     OutputFormat?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
