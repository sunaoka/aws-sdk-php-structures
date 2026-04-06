<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketIntelligentTieringConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 * @property string|null $ExpectedBucketOwner
 * @property Shapes\IntelligentTieringConfiguration $IntelligentTieringConfiguration
 */
class PutBucketIntelligentTieringConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string,
     *     ExpectedBucketOwner?: string|null,
     *     IntelligentTieringConfiguration: Shapes\IntelligentTieringConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
