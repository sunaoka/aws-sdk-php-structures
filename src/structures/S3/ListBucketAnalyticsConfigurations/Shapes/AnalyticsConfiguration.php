<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketAnalyticsConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property AnalyticsFilter $Filter
 * @property StorageClassAnalysis $StorageClassAnalysis
 */
class AnalyticsConfiguration extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Filter?: AnalyticsFilter,
     *     StorageClassAnalysis: StorageClassAnalysis
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
