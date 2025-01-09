<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetSampleData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SampleDataS3SourceConfig $S3SourceConfig
 */
class GetSampleDataRequest extends Request
{
    /**
     * @param array{S3SourceConfig?: Shapes\SampleDataS3SourceConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
