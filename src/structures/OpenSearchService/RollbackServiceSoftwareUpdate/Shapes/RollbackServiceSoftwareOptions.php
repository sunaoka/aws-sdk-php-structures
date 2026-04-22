<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RollbackServiceSoftwareUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CurrentVersion
 * @property string|null $NewVersion
 * @property bool|null $RollbackAvailable
 * @property string|null $Description
 */
class RollbackServiceSoftwareOptions extends Shape
{
    /**
     * @param array{
     *     CurrentVersion?: string|null,
     *     NewVersion?: string|null,
     *     RollbackAvailable?: bool|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
