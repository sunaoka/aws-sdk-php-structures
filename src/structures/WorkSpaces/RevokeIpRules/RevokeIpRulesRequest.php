<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RevokeIpRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property list<string> $UserRules
 */
class RevokeIpRulesRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     UserRules: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
