<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DocumentAttributeKey
 * @property list<SortingConfiguration> $SortingConfigurations
 * @property 'IGNORE'|'COLLAPSE'|'EXPAND' $MissingAttributeKeyStrategy
 * @property bool $Expand
 * @property ExpandConfiguration $ExpandConfiguration
 */
class CollapseConfiguration extends Shape
{
    /**
     * @param array{
     *     DocumentAttributeKey: string,
     *     SortingConfigurations?: list<SortingConfiguration>,
     *     MissingAttributeKeyStrategy?: 'IGNORE'|'COLLAPSE'|'EXPAND',
     *     Expand?: bool,
     *     ExpandConfiguration?: ExpandConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
