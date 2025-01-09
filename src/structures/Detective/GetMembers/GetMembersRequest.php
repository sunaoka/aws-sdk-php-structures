<?php

namespace Sunaoka\Aws\Structures\Detective\GetMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property list<string> $AccountIds
 */
class GetMembersRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     AccountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
