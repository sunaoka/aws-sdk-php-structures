<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketIntelligentTieringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 */
class GetBucketIntelligentTieringConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
