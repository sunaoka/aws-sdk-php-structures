<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\StartReportCreation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $S3Bucket
 */
class StartReportCreationRequest extends Request
{
    /**
     * @param array{S3Bucket: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
