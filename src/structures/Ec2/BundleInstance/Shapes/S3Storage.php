<?php

namespace Sunaoka\Aws\Structures\Ec2\BundleInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSAccessKeyId
 * @property string $Bucket
 * @property string $Prefix
 * @property string|resource|\Psr\Http\Message\StreamInterface $UploadPolicy
 * @property string $UploadPolicySignature
 */
class S3Storage extends Shape
{
    /**
     * @param array{
     *     AWSAccessKeyId?: string,
     *     Bucket?: string,
     *     Prefix?: string,
     *     UploadPolicy?: string|resource|\Psr\Http\Message\StreamInterface,
     *     UploadPolicySignature?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
