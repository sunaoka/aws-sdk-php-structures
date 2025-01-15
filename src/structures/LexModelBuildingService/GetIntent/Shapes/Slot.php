<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property 'Required'|'Optional' $slotConstraint
 * @property string|null $slotType
 * @property string|null $slotTypeVersion
 * @property Prompt|null $valueElicitationPrompt
 * @property int<0, 100>|null $priority
 * @property list<string>|null $sampleUtterances
 * @property string|null $responseCard
 * @property 'NONE'|'DEFAULT_OBFUSCATION'|null $obfuscationSetting
 * @property SlotDefaultValueSpec|null $defaultValueSpec
 */
class Slot extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     slotConstraint: 'Required'|'Optional',
     *     slotType?: string|null,
     *     slotTypeVersion?: string|null,
     *     valueElicitationPrompt?: Prompt|null,
     *     priority?: int<0, 100>|null,
     *     sampleUtterances?: list<string>|null,
     *     responseCard?: string|null,
     *     obfuscationSetting?: 'NONE'|'DEFAULT_OBFUSCATION'|null,
     *     defaultValueSpec?: SlotDefaultValueSpec|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
