<?php

namespace Sunaoka\Aws\Structures\Waf\CreateSqlInjectionMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ChangeToken
 */
class CreateSqlInjectionMatchSetRequest extends Request
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
