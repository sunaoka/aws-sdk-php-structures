<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AuthorizeIpRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property list<Shapes\IpRuleItem> $UserRules
 */
class AuthorizeIpRulesRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     UserRules: list<Shapes\IpRuleItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
