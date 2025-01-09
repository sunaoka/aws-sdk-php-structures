<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutSlotType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\EnumerationValue> $enumerationValues
 * @property string $checksum
 * @property 'ORIGINAL_VALUE'|'TOP_RESOLUTION' $valueSelectionStrategy
 * @property bool $createVersion
 * @property string $parentSlotTypeSignature
 * @property list<Shapes\SlotTypeConfiguration> $slotTypeConfigurations
 */
class PutSlotTypeRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     enumerationValues?: list<Shapes\EnumerationValue>,
     *     checksum?: string,
     *     valueSelectionStrategy?: 'ORIGINAL_VALUE'|'TOP_RESOLUTION',
     *     createVersion?: bool,
     *     parentSlotTypeSignature?: string,
     *     slotTypeConfigurations?: list<Shapes\SlotTypeConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
