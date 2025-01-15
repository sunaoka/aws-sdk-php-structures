<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $model
 * @property list<SortProperty>|null $sort
 * @property Predicate|null $predicate
 * @property list<string>|null $identifiers
 */
class ComponentDataConfiguration extends Shape
{
    /**
     * @param array{
     *     model: string,
     *     sort?: list<SortProperty>|null,
     *     predicate?: Predicate|null,
     *     identifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
