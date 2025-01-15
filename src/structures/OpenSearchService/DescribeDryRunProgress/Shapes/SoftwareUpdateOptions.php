<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoSoftwareUpdateEnabled
 */
class SoftwareUpdateOptions extends Shape
{
    /**
     * @param array{AutoSoftwareUpdateEnabled?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
