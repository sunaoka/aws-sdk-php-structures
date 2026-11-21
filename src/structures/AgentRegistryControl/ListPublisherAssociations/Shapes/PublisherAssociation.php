<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListPublisherAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recordArn
 * @property string $publicIdentifier
 * @property string $publisher
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'SUSPENDED' $status
 * @property string|null $statusReason
 */
class PublisherAssociation extends Shape
{
    /**
     * @param array{
     *     recordArn: string,
     *     publicIdentifier: string,
     *     publisher: string,
     *     status: 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'SUSPENDED',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
