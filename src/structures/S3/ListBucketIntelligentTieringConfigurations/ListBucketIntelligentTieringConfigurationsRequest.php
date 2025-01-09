<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketIntelligentTieringConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $ContinuationToken
 */
class ListBucketIntelligentTieringConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     ContinuationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
