<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property 'V1'|'V2'|null $domainVersion
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $managedAccountId
 * @property string $name
 * @property string|null $portalUrl
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     domainVersion?: 'V1'|'V2'|null,
     *     id: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     managedAccountId: string,
     *     name: string,
     *     portalUrl?: string|null,
     *     status: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
