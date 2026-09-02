<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CmafIngestAbWatermarkerIrdetoSettings|null $CmafIngestAbWatermarkerIrdetoSettings
 */
class CmafIngestWatermarkingSettings extends Shape
{
    /**
     * @param array{CmafIngestAbWatermarkerIrdetoSettings?: CmafIngestAbWatermarkerIrdetoSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
