<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdateActionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool $optional
 * @property bool $key
 * @property bool $noEcho
 * @property bool|null $queryable
 * @property string|null $description
 */
class ActionTypeProperty extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     optional: bool,
     *     key: bool,
     *     noEcho: bool,
     *     queryable?: bool|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
