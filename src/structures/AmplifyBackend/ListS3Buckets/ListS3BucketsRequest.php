<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\ListS3Buckets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListS3BucketsRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
