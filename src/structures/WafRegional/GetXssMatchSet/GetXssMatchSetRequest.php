<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetXssMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $XssMatchSetId
 */
class GetXssMatchSetRequest extends Request
{
    /**
     * @param array{XssMatchSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
