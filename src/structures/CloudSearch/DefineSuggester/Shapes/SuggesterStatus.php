<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineSuggester\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Suggester $Options
 * @property OptionStatus $Status
 */
class SuggesterStatus extends Shape
{
    /**
     * @param array{
     *     Options: Suggester,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
