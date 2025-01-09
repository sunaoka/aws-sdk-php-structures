<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property array<string, list<string>> $fields
 * @property array<string, string> $exprs
 * @property array<string, string> $highlights
 */
class Hit extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     fields?: array<string, list<string>>,
     *     exprs?: array<string, string>,
     *     highlights?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
