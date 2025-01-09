<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteSqlInjectionMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SqlInjectionMatchSetId
 * @property string $ChangeToken
 */
class DeleteSqlInjectionMatchSetRequest extends Request
{
    /**
     * @param array{
     *     SqlInjectionMatchSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
