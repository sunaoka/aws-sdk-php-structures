<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kendraIndex
 * @property string $queryFilterString
 * @property string $role
 */
class KendraConfiguration extends Shape
{
    /**
     * @param array{
     *     kendraIndex: string,
     *     queryFilterString?: string,
     *     role: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
