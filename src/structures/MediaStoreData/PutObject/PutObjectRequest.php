<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\PutObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 * @property string $Path
 * @property string|null $ContentType
 * @property string|null $CacheControl
 * @property 'TEMPORAL'|null $StorageClass
 * @property 'STANDARD'|'STREAMING'|null $UploadAvailability
 */
class PutObjectRequest extends Request
{
    /**
     * @param array{
     *     Body: string|resource|\Psr\Http\Message\StreamInterface,
     *     Path: string,
     *     ContentType?: string|null,
     *     CacheControl?: string|null,
     *     StorageClass?: 'TEMPORAL'|null,
     *     UploadAvailability?: 'STANDARD'|'STREAMING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
