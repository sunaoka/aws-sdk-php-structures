<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\AdvancedEventSelector> $AdvancedEventSelectors
 * @property bool $MultiRegionEnabled
 * @property bool $OrganizationEnabled
 * @property int $RetentionPeriod
 * @property bool $TerminationProtectionEnabled
 * @property list<Shapes\Tag> $TagsList
 * @property string $KmsKeyId
 * @property bool $StartIngestion
 * @property 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING' $BillingMode
 */
class CreateEventDataStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AdvancedEventSelectors?: list<Shapes\AdvancedEventSelector>,
     *     MultiRegionEnabled?: bool,
     *     OrganizationEnabled?: bool,
     *     RetentionPeriod?: int,
     *     TerminationProtectionEnabled?: bool,
     *     TagsList?: list<Shapes\Tag>,
     *     KmsKeyId?: string,
     *     StartIngestion?: bool,
     *     BillingMode?: 'EXTENDABLE_RETENTION_PRICING'|'FIXED_RETENTION_PRICING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
