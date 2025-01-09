<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestSetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $audioFileS3Location
 */
class UtteranceAudioInputSpecification extends Shape
{
    /**
     * @param array{audioFileS3Location: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
