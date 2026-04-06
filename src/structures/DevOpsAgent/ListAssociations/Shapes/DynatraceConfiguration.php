<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $envId
 * @property list<string>|null $resources
 */
class DynatraceConfiguration extends Shape
{
    /**
     * @param array{
     *     envId: string,
     *     resources?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
