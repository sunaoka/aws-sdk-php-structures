<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\CreateSlotTypeVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<Shapes\EnumerationValue>|null $enumerationValues
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property string|null $version
 * @property string|null $checksum
 * @property 'ORIGINAL_VALUE'|'TOP_RESOLUTION'|null $valueSelectionStrategy
 * @property string|null $parentSlotTypeSignature
 * @property list<Shapes\SlotTypeConfiguration>|null $slotTypeConfigurations
 */
class CreateSlotTypeVersionResponse extends Response
{
}
