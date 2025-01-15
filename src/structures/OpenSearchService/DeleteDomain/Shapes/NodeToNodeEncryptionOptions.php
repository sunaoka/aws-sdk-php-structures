<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeleteDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 */
class NodeToNodeEncryptionOptions extends Shape
{
    /**
     * @param array{Enabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
