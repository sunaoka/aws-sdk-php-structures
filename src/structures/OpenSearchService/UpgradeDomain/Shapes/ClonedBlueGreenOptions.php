<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpgradeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetentionOptions|null $RetentionOptions
 */
class ClonedBlueGreenOptions extends Shape
{
    /**
     * @param array{RetentionOptions?: RetentionOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
