<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheControl
 * @property string|null $ContentDisposition
 * @property string|null $ContentEncoding
 * @property string|null $ContentLanguage
 * @property array<string, string>|null $UserMetadata
 * @property int<0, max>|null $ContentLength
 * @property string|null $ContentMD5
 * @property string|null $ContentType
 * @property \Aws\Api\DateTimeResult|null $HttpExpiresDate
 * @property bool|null $RequesterCharged
 * @property 'AES256'|'KMS'|null $SSEAlgorithm
 */
class S3ObjectMetadata extends Shape
{
    /**
     * @param array{
     *     CacheControl?: string|null,
     *     ContentDisposition?: string|null,
     *     ContentEncoding?: string|null,
     *     ContentLanguage?: string|null,
     *     UserMetadata?: array<string, string>|null,
     *     ContentLength?: int<0, max>|null,
     *     ContentMD5?: string|null,
     *     ContentType?: string|null,
     *     HttpExpiresDate?: \Aws\Api\DateTimeResult|null,
     *     RequesterCharged?: bool|null,
     *     SSEAlgorithm?: 'AES256'|'KMS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
