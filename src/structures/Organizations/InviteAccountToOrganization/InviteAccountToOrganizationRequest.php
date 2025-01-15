<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteAccountToOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\HandshakeParty $Target
 * @property string|null $Notes
 * @property list<Shapes\Tag>|null $Tags
 */
class InviteAccountToOrganizationRequest extends Request
{
    /**
     * @param array{
     *     Target: Shapes\HandshakeParty,
     *     Notes?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
