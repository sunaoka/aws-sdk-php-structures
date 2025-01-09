<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteAccountToOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATION_FEATURE_SET'|'EMAIL'|'MASTER_EMAIL'|'MASTER_NAME'|'NOTES'|'PARENT_HANDSHAKE' $Type
 * @property list<HandshakeResource> $Resources
 */
class HandshakeResource extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Type?: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATION_FEATURE_SET'|'EMAIL'|'MASTER_EMAIL'|'MASTER_NAME'|'NOTES'|'PARENT_HANDSHAKE',
     *     Resources?: list<HandshakeResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
