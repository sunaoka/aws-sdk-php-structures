<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateXssMatchSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property XssMatchTuple $XssMatchTuple
 */
class XssMatchSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     XssMatchTuple: XssMatchTuple
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
