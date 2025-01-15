<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelBundleTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AWSAccessKeyId
 * @property string|null $Bucket
 * @property string|null $Prefix
 * @property \Psr\Http\Message\StreamInterface|null $UploadPolicy
 * @property string|null $UploadPolicySignature
 */
class S3Storage extends Shape
{
    /**
     * @param array{
     *     AWSAccessKeyId?: string|null,
     *     Bucket?: string|null,
     *     Prefix?: string|null,
     *     UploadPolicy?: \Psr\Http\Message\StreamInterface|null,
     *     UploadPolicySignature?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
