<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Method
 * @property string|null $Key
 * @property string|null $KeyMd5
 * @property string|null $InitializationVector
 * @property string|null $LicenseAcquisitionUrl
 * @property string|null $KeyStoragePolicy
 */
class HlsContentProtection extends Shape
{
    /**
     * @param array{
     *     Method?: string|null,
     *     Key?: string|null,
     *     KeyMd5?: string|null,
     *     InitializationVector?: string|null,
     *     LicenseAcquisitionUrl?: string|null,
     *     KeyStoragePolicy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
