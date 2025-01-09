<?php

namespace Sunaoka\Aws\Structures\FIS\GetAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $description
 * @property array<string, ActionParameter> $parameters
 * @property array<string, ActionTarget> $targets
 * @property array<string, string> $tags
 */
class Action extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     description?: string,
     *     parameters?: array<string, ActionParameter>,
     *     targets?: array<string, ActionTarget>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
