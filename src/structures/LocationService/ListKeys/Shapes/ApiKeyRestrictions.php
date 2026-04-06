<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowActions
 * @property list<string>|null $AllowReferers
 * @property list<string> $AllowResources
 */
class ApiKeyRestrictions extends Shape
{
    /**
     * @param array{
     *     AllowActions: list<string>,
     *     AllowReferers?: list<string>|null,
     *     AllowResources: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
