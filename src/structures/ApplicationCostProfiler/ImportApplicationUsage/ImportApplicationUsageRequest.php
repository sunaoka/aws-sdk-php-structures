<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\ImportApplicationUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SourceS3Location $sourceS3Location
 */
class ImportApplicationUsageRequest extends Request
{
    /**
     * @param array{sourceS3Location: Shapes\SourceS3Location} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
