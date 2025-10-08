<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $elementId
 * @property list<string>|null $codesToAdd
 * @property list<string>|null $codesToRemove
 */
class X12CodeListValidationRule extends Shape
{
    /**
     * @param array{
     *     elementId: string,
     *     codesToAdd?: list<string>|null,
     *     codesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
