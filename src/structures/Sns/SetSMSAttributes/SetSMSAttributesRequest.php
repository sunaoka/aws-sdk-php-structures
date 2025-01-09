<?php

namespace Sunaoka\Aws\Structures\Sns\SetSMSAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $attributes
 */
class SetSMSAttributesRequest extends Request
{
    /**
     * @param array{attributes: array<string, string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
