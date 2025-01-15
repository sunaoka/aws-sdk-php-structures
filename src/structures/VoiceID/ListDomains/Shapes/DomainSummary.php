<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property string|null $DomainId
 * @property 'ACTIVE'|'PENDING'|'SUSPENDED'|null $DomainStatus
 * @property string|null $Name
 * @property ServerSideEncryptionConfiguration|null $ServerSideEncryptionConfiguration
 * @property ServerSideEncryptionUpdateDetails|null $ServerSideEncryptionUpdateDetails
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property WatchlistDetails|null $WatchlistDetails
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     DomainId?: string|null,
     *     DomainStatus?: 'ACTIVE'|'PENDING'|'SUSPENDED'|null,
     *     Name?: string|null,
     *     ServerSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     ServerSideEncryptionUpdateDetails?: ServerSideEncryptionUpdateDetails|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     WatchlistDetails?: WatchlistDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
