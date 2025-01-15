<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\EnumerationValue>|null $enumerationValues
 * @property string|null $checksum
 * @property 'ORIGINAL_VALUE'|'TOP_RESOLUTION'|null $valueSelectionStrategy
 * @property bool|null $createVersion
 * @property string|null $parentSlotTypeSignature
 * @property list<Shapes\SlotTypeConfiguration>|null $slotTypeConfigurations
 */
class PutSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     enumerationValues?: list<Shapes\EnumerationValue>|null,
     *     checksum?: string|null,
     *     valueSelectionStrategy?: 'ORIGINAL_VALUE'|'TOP_RESOLUTION'|null,
     *     createVersion?: bool|null,
     *     parentSlotTypeSignature?: string|null,
     *     slotTypeConfigurations?: list<Shapes\SlotTypeConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
