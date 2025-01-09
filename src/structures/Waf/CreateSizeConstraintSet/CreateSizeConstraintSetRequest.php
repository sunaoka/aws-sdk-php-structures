<?php

namespace Sunaoka\Aws\Structures\Waf\CreateSizeConstraintSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ChangeToken
 */
class CreateSizeConstraintSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
