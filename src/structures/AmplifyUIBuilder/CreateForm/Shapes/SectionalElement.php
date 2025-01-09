<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property FieldPosition $position
 * @property string $text
 * @property int $level
 * @property string $orientation
 * @property bool $excluded
 */
class SectionalElement extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     position?: FieldPosition,
     *     text?: string,
     *     level?: int,
     *     orientation?: string,
     *     excluded?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
