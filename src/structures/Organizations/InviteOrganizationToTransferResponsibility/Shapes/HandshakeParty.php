<?php

namespace Sunaoka\Aws\Structures\Organizations\InviteOrganizationToTransferResponsibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'ACCOUNT'|'ORGANIZATION'|'EMAIL' $Type
 */
class HandshakeParty extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'ACCOUNT'|'ORGANIZATION'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
