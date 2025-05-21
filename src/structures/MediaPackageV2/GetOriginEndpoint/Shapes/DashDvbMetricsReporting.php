<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportingUrl
 * @property int<1, 1000>|null $Probability
 */
class DashDvbMetricsReporting extends Shape
{
    /**
     * @param array{
     *     ReportingUrl: string,
     *     Probability?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
