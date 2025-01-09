<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $DomainId
 * @property 'ACTIVE'|'PENDING'|'SUSPENDED' $DomainStatus
 * @property string $Name
 * @property ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property ServerSideEncryptionUpdateDetails $ServerSideEncryptionUpdateDetails
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property WatchlistDetails $WatchlistDetails
 */
class DomainSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     DomainId?: string,
     *     DomainStatus?: 'ACTIVE'|'PENDING'|'SUSPENDED',
     *     Name?: string,
     *     ServerSideEncryptionConfiguration?: ServerSideEncryptionConfiguration,
     *     ServerSideEncryptionUpdateDetails?: ServerSideEncryptionUpdateDetails,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     WatchlistDetails?: WatchlistDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
