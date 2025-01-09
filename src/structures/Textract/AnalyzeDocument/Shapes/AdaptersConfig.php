<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Adapter> $Adapters
 */
class AdaptersConfig extends Shape
{
    /**
     * @param array{Adapters: list<Adapter>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
