<?php

namespace Sunaoka\Aws\Structures\Organizations\AcceptHandshake\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 * @property 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATION_FEATURE_SET'|'EMAIL'|'MASTER_EMAIL'|'MASTER_NAME'|'NOTES'|'PARENT_HANDSHAKE'|'RESPONSIBILITY_TRANSFER'|'TRANSFER_START_TIMESTAMP'|'TRANSFER_TYPE'|'MANAGEMENT_ACCOUNT'|'MANAGEMENT_EMAIL'|'MANAGEMENT_NAME'|null $Type
 * @property list<HandshakeResource>|null $Resources
 */
class HandshakeResource extends Shape
{
    /**
     * @param array{
     *     Value?: string|null,
     *     Type?: 'ACCOUNT'|'ORGANIZATION'|'ORGANIZATION_FEATURE_SET'|'EMAIL'|'MASTER_EMAIL'|'MASTER_NAME'|'NOTES'|'PARENT_HANDSHAKE'|'RESPONSIBILITY_TRANSFER'|'TRANSFER_START_TIMESTAMP'|'TRANSFER_TYPE'|'MANAGEMENT_ACCOUNT'|'MANAGEMENT_EMAIL'|'MANAGEMENT_NAME'|null,
     *     Resources?: list<HandshakeResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
