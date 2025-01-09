<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateSqlInjectionMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SqlInjectionMatchSetId
 * @property string $ChangeToken
 * @property list<Shapes\SqlInjectionMatchSetUpdate> $Updates
 */
class UpdateSqlInjectionMatchSetRequest extends Request
{
    /**
     * @param array{
     *     SqlInjectionMatchSetId: string,
     *     ChangeToken: string,
     *     Updates: list<Shapes\SqlInjectionMatchSetUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
