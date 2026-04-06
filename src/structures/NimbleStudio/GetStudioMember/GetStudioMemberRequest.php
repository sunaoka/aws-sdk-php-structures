<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetStudioMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $principalId
 * @property string $studioId
 */
class GetStudioMemberRequest extends Request
{
    /**
     * @param array{
     *     principalId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
