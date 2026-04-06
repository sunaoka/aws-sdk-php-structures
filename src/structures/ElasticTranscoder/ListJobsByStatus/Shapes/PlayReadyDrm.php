<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Format
 * @property string|null $Key
 * @property string|null $KeyMd5
 * @property string|null $KeyId
 * @property string|null $InitializationVector
 * @property string|null $LicenseAcquisitionUrl
 */
class PlayReadyDrm extends Shape
{
    /**
     * @param array{
     *     Format?: string|null,
     *     Key?: string|null,
     *     KeyMd5?: string|null,
     *     KeyId?: string|null,
     *     InitializationVector?: string|null,
     *     LicenseAcquisitionUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
