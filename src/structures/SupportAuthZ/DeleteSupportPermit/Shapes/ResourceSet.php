<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\DeleteSupportPermit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $allResourcesInRegion
 * @property list<string>|null $resources
 */
class ResourceSet extends Shape
{
    /**
     * @param array{
     *     allResourcesInRegion?: Unit|null,
     *     resources?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
