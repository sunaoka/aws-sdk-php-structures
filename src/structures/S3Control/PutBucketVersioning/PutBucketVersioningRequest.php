<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketVersioning;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property string $MFA
 * @property Shapes\VersioningConfiguration $VersioningConfiguration
 */
class PutBucketVersioningRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket: string,
     *     MFA?: string,
     *     VersioningConfiguration: Shapes\VersioningConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
