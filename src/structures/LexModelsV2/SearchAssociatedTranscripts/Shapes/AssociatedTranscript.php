<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $transcript
 */
class AssociatedTranscript extends Shape
{
    /**
     * @param array{transcript?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
