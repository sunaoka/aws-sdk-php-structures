<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteXssMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $XssMatchSetId
 * @property string $ChangeToken
 */
class DeleteXssMatchSetRequest extends Request
{
    /**
     * @param array{
     *     XssMatchSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
