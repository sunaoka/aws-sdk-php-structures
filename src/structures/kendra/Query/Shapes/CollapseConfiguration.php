<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentAttributeKey
 * @property list<SortingConfiguration>|null $SortingConfigurations
 * @property 'IGNORE'|'COLLAPSE'|'EXPAND'|null $MissingAttributeKeyStrategy
 * @property bool|null $Expand
 * @property ExpandConfiguration|null $ExpandConfiguration
 */
class CollapseConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey: string,
     *     SortingConfigurations?: list<SortingConfiguration>|null,
     *     MissingAttributeKeyStrategy?: 'IGNORE'|'COLLAPSE'|'EXPAND'|null,
     *     Expand?: bool|null,
     *     ExpandConfiguration?: ExpandConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
