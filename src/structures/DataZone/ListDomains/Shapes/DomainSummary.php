<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property 'V1'|'V2' $domainVersion
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $managedAccountId
 * @property string $name
 * @property string $portalUrl
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     domainVersion?: 'V1'|'V2',
     *     id: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     managedAccountId: string,
     *     name: string,
     *     portalUrl?: string,
     *     status: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
