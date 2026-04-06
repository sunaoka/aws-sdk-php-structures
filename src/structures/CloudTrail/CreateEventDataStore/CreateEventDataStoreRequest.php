<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateEventDataStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\AdvancedEventSelector>|null $AdvancedEventSelectors
 * @property bool|null $MultiRegionEnabled
 * @property bool|null $OrganizationEnabled
 * @property int<7, 2557>|null $RetentionPeriod
 * @property bool|null $TerminationProtectionEnabled
 * @property list<Shapes\Tag>|null $TagsList
 * @property string|null $KmsKeyId
 * @property bool|null $StartIngestion
 */
class CreateEventDataStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AdvancedEventSelectors?: list<Shapes\AdvancedEventSelector>|null,
     *     MultiRegionEnabled?: bool|null,
     *     OrganizationEnabled?: bool|null,
     *     RetentionPeriod?: int<7, 2557>|null,
     *     TerminationProtectionEnabled?: bool|null,
     *     TagsList?: list<Shapes\Tag>|null,
     *     KmsKeyId?: string|null,
     *     StartIngestion?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
