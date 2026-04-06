<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string|null $Name
 * @property list<Shapes\AdvancedEventSelector>|null $AdvancedEventSelectors
 * @property bool|null $MultiRegionEnabled
 * @property bool|null $OrganizationEnabled
 * @property int<7, 3653>|null $RetentionPeriod
 * @property bool|null $TerminationProtectionEnabled
 * @property string|null $KmsKeyId
 * @property 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING'|null $BillingMode
 */
class UpdateEventDataStoreRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore: string,
     *     Name?: string|null,
     *     AdvancedEventSelectors?: list<Shapes\AdvancedEventSelector>|null,
     *     MultiRegionEnabled?: bool|null,
     *     OrganizationEnabled?: bool|null,
     *     RetentionPeriod?: int<7, 3653>|null,
     *     TerminationProtectionEnabled?: bool|null,
     *     KmsKeyId?: string|null,
     *     BillingMode?: 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
