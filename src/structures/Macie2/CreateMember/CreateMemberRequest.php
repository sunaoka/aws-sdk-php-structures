<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AccountDetail $account
 * @property array<string, string> $tags
 */
class CreateMemberRequest extends Request
{
    /**
     * @param array{
     *     account: Shapes\AccountDetail,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
