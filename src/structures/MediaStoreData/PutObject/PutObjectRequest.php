<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\PutObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Body
 * @property string $Path
 * @property string $ContentType
 * @property string $CacheControl
 * @property 'TEMPORAL' $StorageClass
 * @property 'STANDARD'|'STREAMING' $UploadAvailability
 */
class PutObjectRequest extends Request
{
    /**
     * @param array{
     *     Body: string,
     *     Path: string,
     *     ContentType?: string,
     *     CacheControl?: string,
     *     StorageClass?: 'TEMPORAL',
     *     UploadAvailability?: 'STANDARD'|'STREAMING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
