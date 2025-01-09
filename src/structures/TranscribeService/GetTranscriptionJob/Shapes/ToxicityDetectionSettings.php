<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ALL'> $ToxicityCategories
 */
class ToxicityDetectionSettings extends Shape
{
    /**
     * @param array{ToxicityCategories: list<'ALL'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
