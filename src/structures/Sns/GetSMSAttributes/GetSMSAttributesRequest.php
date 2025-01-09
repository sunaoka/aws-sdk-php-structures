<?php

namespace Sunaoka\Aws\Structures\Sns\GetSMSAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $attributes
 */
class GetSMSAttributesRequest extends Request
{
    /**
     * @param array{attributes?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
