<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AllowActions
 * @property list<string> $AllowResources
 * @property list<string> $AllowReferers
 */
class ApiKeyRestrictions extends Shape
{
    /**
     * @param array{
     *     AllowActions: list<string>,
     *     AllowResources: list<string>,
     *     AllowReferers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
