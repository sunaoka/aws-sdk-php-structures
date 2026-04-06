<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetEngineStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $version
 */
class QueryLanguageVersion extends Shape
{
    /**
     * @param array{version: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
