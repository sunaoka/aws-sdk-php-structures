<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Method
 * @property string $Key
 * @property string $KeyMd5
 * @property string $InitializationVector
 * @property string $LicenseAcquisitionUrl
 * @property string $KeyStoragePolicy
 */
class HlsContentProtection extends Shape
{
    /**
     * @param array{
     *     Method?: string,
     *     Key?: string,
     *     KeyMd5?: string,
     *     InitializationVector?: string,
     *     LicenseAcquisitionUrl?: string,
     *     KeyStoragePolicy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
