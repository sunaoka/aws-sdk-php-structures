<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashDvbFontDownload|null $FontDownload
 * @property list<DashDvbMetricsReporting>|null $ErrorMetrics
 */
class DashDvbSettings extends Shape
{
    /**
     * @param array{
     *     FontDownload?: DashDvbFontDownload|null,
     *     ErrorMetrics?: list<DashDvbMetricsReporting>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
