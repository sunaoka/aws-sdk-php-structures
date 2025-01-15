<?php

namespace Sunaoka\Aws\Structures\Organizations\CancelHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATION_FEATURE_SET'|'EMAIL'|'MASTER_EMAIL'|'MASTER_NAME'|'NOTES'|'PARENT_HANDSHAKE'|null $Type
 * @property list<HandshakeResource>|null $Resources
 */
class HandshakeResource extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Type?: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATION_FEATURE_SET'|'EMAIL'|'MASTER_EMAIL'|'MASTER_NAME'|'NOTES'|'PARENT_HANDSHAKE'|null,
     *     Resources?: list<HandshakeResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
