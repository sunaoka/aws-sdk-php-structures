<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteStudioMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $principalId
 * @property string $studioId
 */
class DeleteStudioMemberRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     principalId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
