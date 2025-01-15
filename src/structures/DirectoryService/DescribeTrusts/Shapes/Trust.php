<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeTrusts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $TrustId
 * @property string|null $RemoteDomainName
 * @property 'Forest'|'External'|null $TrustType
 * @property 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way'|null $TrustDirection
 * @property 'Creating'|'Created'|'Verifying'|'VerifyFailed'|'Verified'|'Updating'|'UpdateFailed'|'Updated'|'Deleting'|'Deleted'|'Failed'|null $TrustState
 * @property \Aws\Api\DateTimeResult|null $CreatedDateTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDateTime
 * @property \Aws\Api\DateTimeResult|null $StateLastUpdatedDateTime
 * @property string|null $TrustStateReason
 * @property 'Enabled'|'Disabled'|null $SelectiveAuth
 */
class Trust extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     TrustId?: string|null,
     *     RemoteDomainName?: string|null,
     *     TrustType?: 'Forest'|'External'|null,
     *     TrustDirection?: 'One-Way: Outgoing'|'One-Way: Incoming'|'Two-Way'|null,
     *     TrustState?: 'Creating'|'Created'|'Verifying'|'VerifyFailed'|'Verified'|'Updating'|'UpdateFailed'|'Updated'|'Deleting'|'Deleted'|'Failed'|null,
     *     CreatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     StateLastUpdatedDateTime?: \Aws\Api\DateTimeResult|null,
     *     TrustStateReason?: string|null,
     *     SelectiveAuth?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
