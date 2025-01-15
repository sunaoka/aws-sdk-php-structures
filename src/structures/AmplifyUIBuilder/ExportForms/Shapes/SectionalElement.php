<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property FieldPosition|null $position
 * @property string|null $text
 * @property int|null $level
 * @property string|null $orientation
 * @property bool|null $excluded
 */
class SectionalElement extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     position?: FieldPosition|null,
     *     text?: string|null,
     *     level?: int|null,
     *     orientation?: string|null,
     *     excluded?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
