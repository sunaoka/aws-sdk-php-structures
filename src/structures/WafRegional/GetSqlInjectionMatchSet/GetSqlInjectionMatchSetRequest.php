<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetSqlInjectionMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SqlInjectionMatchSetId
 */
class GetSqlInjectionMatchSetRequest extends Request
{
    /**
     * @param array{SqlInjectionMatchSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
