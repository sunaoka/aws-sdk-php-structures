<?php

namespace Sunaoka\Aws\Structures\RAM\AcceptResourceShareInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceShareArn
 * @property string|null $resourceShareName
 * @property string|null $associatedEntity
 * @property 'PRINCIPAL'|'RESOURCE'|null $associationType
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|null $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property bool|null $external
 */
class ResourceShareAssociation extends Shape
{
    /**
     * @param array{
     *     resourceShareArn?: string|null,
     *     resourceShareName?: string|null,
     *     associatedEntity?: string|null,
     *     associationType?: 'PRINCIPAL'|'RESOURCE'|null,
     *     status?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED'|null,
     *     statusMessage?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     external?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
