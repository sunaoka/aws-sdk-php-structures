<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteAccountToOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\HandshakeParty $Target
 * @property string $Notes
 * @property list<Shapes\Tag> $Tags
 */
class InviteAccountToOrganizationRequest extends Request
{
    /**
     * @param array{
     *     Target: Shapes\HandshakeParty,
     *     Notes?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
