<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string $Name
 * @property list<Shapes\AdvancedEventSelector> $AdvancedEventSelectors
 * @property bool $MultiRegionEnabled
 * @property bool $OrganizationEnabled
 * @property int $RetentionPeriod
 * @property bool $TerminationProtectionEnabled
 * @property string $KmsKeyId
 * @property 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING' $BillingMode
 */
class UpdateEventDataStoreRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore: string,
     *     Name?: string,
     *     AdvancedEventSelectors?: list<Shapes\AdvancedEventSelector>,
     *     MultiRegionEnabled?: bool,
     *     OrganizationEnabled?: bool,
     *     RetentionPeriod?: int,
     *     TerminationProtectionEnabled?: bool,
     *     KmsKeyId?: string,
     *     BillingMode?: 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
