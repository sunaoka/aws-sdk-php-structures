<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConformancePack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIdentifier
 */
class ConformancePackSource extends Shape
{
    /**
     * @param array{SourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
