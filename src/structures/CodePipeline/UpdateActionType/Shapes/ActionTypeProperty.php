<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool $optional
 * @property bool $key
 * @property bool $noEcho
 * @property bool $queryable
 * @property string $description
 */
class ActionTypeProperty extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     optional: bool,
     *     key: bool,
     *     noEcho: bool,
     *     queryable?: bool,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
