<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $spaceId
 * @property string $name
 * @property Shapes\AccessGrantPrincipal $principal
 * @property 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM' $permission
 * @property list<Shapes\ScopedActions>|null $scopedActions
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateAccessGrantRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     spaceId: string,
     *     name: string,
     *     principal: Shapes\AccessGrantPrincipal,
     *     permission: 'SPACE_ADMIN'|'READ'|'READ_WRITE_DELETE'|'CUSTOM',
     *     scopedActions?: list<Shapes\ScopedActions>|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
