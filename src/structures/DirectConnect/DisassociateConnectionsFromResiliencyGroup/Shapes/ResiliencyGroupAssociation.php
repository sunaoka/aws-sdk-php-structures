<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DisassociateConnectionsFromResiliencyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resiliencyGroupId
 * @property string|null $connectionArn
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|null $state
 */
class ResiliencyGroupAssociation extends Shape
{
    /**
     * @param array{
     *     resiliencyGroupId?: string|null,
     *     connectionArn?: string|null,
     *     state?: 'associating'|'associated'|'disassociating'|'disassociated'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
