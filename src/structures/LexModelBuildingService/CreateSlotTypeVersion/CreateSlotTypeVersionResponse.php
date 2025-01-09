<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateSlotTypeVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\EnumerationValue> $enumerationValues
 * @property \Aws\Api\DateTimeResult $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property string $version
 * @property string $checksum
 * @property 'ORIGINAL_VALUE'|'TOP_RESOLUTION' $valueSelectionStrategy
 * @property string $parentSlotTypeSignature
 * @property list<Shapes\SlotTypeConfiguration> $slotTypeConfigurations
 */
class CreateSlotTypeVersionResponse extends Response
{
}
