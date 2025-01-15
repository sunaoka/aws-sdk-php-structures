<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property AnalyticsFilter|null $Filter
 * @property StorageClassAnalysis $StorageClassAnalysis
 */
class AnalyticsConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Filter?: AnalyticsFilter|null,
     *     StorageClassAnalysis: StorageClassAnalysis
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
