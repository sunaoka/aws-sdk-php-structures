<?php

namespace Sunaoka\Aws\Structures\Sns\GetSMSAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $attributes
 */
class GetSMSAttributesRequest extends Request
{
    /**
     * @param array{attributes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
