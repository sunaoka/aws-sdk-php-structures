<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateWebACL;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 * @property string $ChangeToken
 * @property list<Shapes\WebACLUpdate> $Updates
 * @property Shapes\WafAction $DefaultAction
 */
class UpdateWebACLRequest extends Request
{
    /**
     * @param array{
     *     WebACLId: string,
     *     ChangeToken: string,
     *     Updates?: list<Shapes\WebACLUpdate>,
     *     DefaultAction?: Shapes\WafAction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
