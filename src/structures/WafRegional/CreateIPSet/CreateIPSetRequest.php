<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateIPSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ChangeToken
 */
class CreateIPSetRequest extends Request
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
