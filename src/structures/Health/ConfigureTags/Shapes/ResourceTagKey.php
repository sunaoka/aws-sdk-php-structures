<?php

namespace Sunaoka\Aws\Structures\Health\ConfigureTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $key
 * @property bool|null $enabledForEventBridge
 * @property 'PENDING'|'ACTIVE'|null $status
 */
class ResourceTagKey extends Shape
{
    /**
     * @param array{
     *     key?: string|null,
     *     enabledForEventBridge?: bool|null,
     *     status?: 'PENDING'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
