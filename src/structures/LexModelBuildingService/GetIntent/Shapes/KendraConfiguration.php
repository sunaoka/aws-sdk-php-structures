<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndex
 * @property string|null $queryFilterString
 * @property string $role
 */
class KendraConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraIndex: string,
     *     queryFilterString?: string|null,
     *     role: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
