<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property array<string, list<string>>|null $fields
 * @property array<string, string>|null $exprs
 * @property array<string, string>|null $highlights
 */
class Hit extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     fields?: array<string, list<string>>|null,
     *     exprs?: array<string, string>|null,
     *     highlights?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
