<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IPSetId
 * @property string $ChangeToken
 */
class DeleteIPSetRequest extends Request
{
    /**
     * @param array{
     *     IPSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
