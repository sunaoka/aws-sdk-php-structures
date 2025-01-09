<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $MemberId
 */
class GetMemberRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
