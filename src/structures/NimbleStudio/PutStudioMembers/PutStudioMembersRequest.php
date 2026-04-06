<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\PutStudioMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $identityStoreId
 * @property list<Shapes\NewStudioMember> $members
 * @property string $studioId
 */
class PutStudioMembersRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     identityStoreId: string,
     *     members: list<Shapes\NewStudioMember>,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
