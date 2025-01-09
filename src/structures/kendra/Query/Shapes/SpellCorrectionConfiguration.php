<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IncludeQuerySpellCheckSuggestions
 */
class SpellCorrectionConfiguration extends Shape
{
    /**
     * @param array{IncludeQuerySpellCheckSuggestions: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
