<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeAcmeAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountUrl
 * @property string|null $PublicKeyThumbprint
 * @property 'VALID'|'DEACTIVATED'|'REVOKED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $AcmeExternalAccountBindingArn
 * @property list<string>|null $Contacts
 */
class AcmeAccount extends Shape
{
    /**
     * @param array{
     *     AccountUrl?: string|null,
     *     PublicKeyThumbprint?: string|null,
     *     Status?: 'VALID'|'DEACTIVATED'|'REVOKED'|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     AcmeExternalAccountBindingArn?: string|null,
     *     Contacts?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
