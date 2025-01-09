<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $testSetId
 */
class TestSetExportSpecification extends Shape
{
    /**
     * @param array{testSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
