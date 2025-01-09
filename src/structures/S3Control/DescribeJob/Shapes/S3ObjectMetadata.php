<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheControl
 * @property string $ContentDisposition
 * @property string $ContentEncoding
 * @property string $ContentLanguage
 * @property array<string, string> $UserMetadata
 * @property int<0, max> $ContentLength
 * @property string $ContentMD5
 * @property string $ContentType
 * @property \Aws\Api\DateTimeResult $HttpExpiresDate
 * @property bool $RequesterCharged
 * @property 'AES256'|'KMS' $SSEAlgorithm
 */
class S3ObjectMetadata extends Shape
{
    /**
     * @param array{
     *     CacheControl?: string,
     *     ContentDisposition?: string,
     *     ContentEncoding?: string,
     *     ContentLanguage?: string,
     *     UserMetadata?: array<string, string>,
     *     ContentLength?: int<0, max>,
     *     ContentMD5?: string,
     *     ContentType?: string,
     *     HttpExpiresDate?: \Aws\Api\DateTimeResult,
     *     RequesterCharged?: bool,
     *     SSEAlgorithm?: 'AES256'|'KMS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
