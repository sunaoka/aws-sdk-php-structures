<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string $arn
 * @property string $managedAccountId
 * @property 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED' $status
 * @property string|null $portalUrl
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property 'V1'|'V2'|null $domainVersion
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     arn: string,
     *     managedAccountId: string,
     *     status: 'CREATING'|'AVAILABLE'|'CREATION_FAILED'|'DELETING'|'DELETED'|'DELETION_FAILED',
     *     portalUrl?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     domainVersion?: 'V1'|'V2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
