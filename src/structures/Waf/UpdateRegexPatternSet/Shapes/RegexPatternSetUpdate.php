<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRegexPatternSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property string $RegexPatternString
 */
class RegexPatternSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     RegexPatternString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
