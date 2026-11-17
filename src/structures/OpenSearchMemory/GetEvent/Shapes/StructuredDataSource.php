<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $json
 */
class StructuredDataSource extends Shape
{
    /**
     * @param array{json?: Document|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
