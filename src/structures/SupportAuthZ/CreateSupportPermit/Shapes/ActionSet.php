<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\CreateSupportPermit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Unit|null $allActions
 * @property list<string>|null $actions
 */
class ActionSet extends Shape
{
    /**
     * @param array{
     *     allActions?: Unit|null,
     *     actions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
