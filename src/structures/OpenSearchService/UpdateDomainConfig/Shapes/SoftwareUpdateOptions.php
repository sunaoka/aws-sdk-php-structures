<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AutoSoftwareUpdateEnabled
 */
class SoftwareUpdateOptions extends Shape
{
    /**
     * @param array{AutoSoftwareUpdateEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
