<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeTrusts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryId
 * @property string $TrustId
 * @property string $RemoteDomainName
 * @property 'Forest'|'External' $TrustType
 * @property 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way' $TrustDirection
 * @property 'Creating'|'Created'|'Verifying'|'VerifyFailed'|'Verified'|'Updating'|'UpdateFailed'|'Updated'|'Deleting'|'Deleted'|'Failed' $TrustState
 * @property \Aws\Api\DateTimeResult $CreatedDateTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult $StateLastUpdatedDateTime
 * @property string $TrustStateReason
 * @property 'Enabled'|'Disabled' $SelectiveAuth
 */
class Trust extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string,
     *     TrustId?: string,
     *     RemoteDomainName?: string,
     *     TrustType?: 'Forest'|'External',
     *     TrustDirection?: 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way',
     *     TrustState?: 'Creating'|'Created'|'Verifying'|'VerifyFailed'|'Verified'|'Updating'|'UpdateFailed'|'Updated'|'Deleting'|'Deleted'|'Failed',
     *     CreatedDateTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     StateLastUpdatedDateTime?: \Aws\Api\DateTimeResult,
     *     TrustStateReason?: string,
     *     SelectiveAuth?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
