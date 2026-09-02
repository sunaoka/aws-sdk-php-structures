<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $EmbeddingFrequency
 * @property double $SceneCut
 * @property double $TargetPsnr
 */
class AbWatermarkingCustomProfile extends Shape
{
    /**
     * @param array{
     *     EmbeddingFrequency: double,
     *     SceneCut: double,
     *     TargetPsnr: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
