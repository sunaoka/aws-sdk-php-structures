<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $Title
 * @property 'HIDDEN'|'VISIBLE'|null $TitleVisibility
 * @property string|null $Description
 * @property 'HIDDEN'|'VISIBLE'|null $DescriptionVisibility
 * @property string|null $LinkText
 * @property string|null $LinkUrl
 * @property 'HIDDEN'|'VISIBLE'|null $LinkVisibility
 */
class VisualMessageConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Title?: string|null,
     *     TitleVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     Description?: string|null,
     *     DescriptionVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     LinkText?: string|null,
     *     LinkUrl?: string|null,
     *     LinkVisibility?: 'HIDDEN'|'VISIBLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
