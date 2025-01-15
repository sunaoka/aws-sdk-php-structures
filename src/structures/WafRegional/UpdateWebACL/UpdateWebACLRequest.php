<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 * @property string $ChangeToken
 * @property list<Shapes\WebACLUpdate>|null $Updates
 * @property Shapes\WafAction|null $DefaultAction
 */
class UpdateWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLId: string,
     *     ChangeToken: string,
     *     Updates?: list<Shapes\WebACLUpdate>|null,
     *     DefaultAction?: Shapes\WafAction|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
