<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowActions
 * @property list<string> $AllowResources
 * @property list<string>|null $AllowReferers
 */
class ApiKeyRestrictions extends Shape
{
    /**
     * @param array{
     *     AllowActions: list<string>,
     *     AllowResources: list<string>,
     *     AllowReferers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
