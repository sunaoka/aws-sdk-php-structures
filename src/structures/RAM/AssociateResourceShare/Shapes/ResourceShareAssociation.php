<?php

namespace Sunaoka\Aws\Structures\RAM\AssociateResourceShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceShareArn
 * @property string $resourceShareName
 * @property string $associatedEntity
 * @property 'PRINCIPAL'|'RESOURCE' $associationType
 * @property 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property bool $external
 */
class ResourceShareAssociation extends Shape
{
    /**
     * @param array{
     *     resourceShareArn?: string,
     *     resourceShareName?: string,
     *     associatedEntity?: string,
     *     associationType?: 'PRINCIPAL'|'RESOURCE',
     *     status?: 'ASSOCIATING'|'ASSOCIATED'|'FAILED'|'DISASSOCIATING'|'DISASSOCIATED',
     *     statusMessage?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult,
     *     external?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
