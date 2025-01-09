<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $Key
 * @property string $KeyMd5
 * @property string $KeyId
 * @property string $InitializationVector
 * @property string $LicenseAcquisitionUrl
 */
class PlayReadyDrm extends Shape
{
    /**
     * @param array{
     *     Format?: string,
     *     Key?: string,
     *     KeyMd5?: string,
     *     KeyId?: string,
     *     InitializationVector?: string,
     *     LicenseAcquisitionUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
