<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property 'ENABLED'|'DISABLED' $queryLogStatus
 * @property array<string, string>|null $tags
 */
class CreateMembershipRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     queryLogStatus: 'ENABLED'|'DISABLED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
