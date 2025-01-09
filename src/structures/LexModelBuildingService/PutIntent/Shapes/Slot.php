<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property 'Required'|'Optional' $slotConstraint
 * @property string $slotType
 * @property string $slotTypeVersion
 * @property Prompt $valueElicitationPrompt
 * @property int<0, 100> $priority
 * @property list<string> $sampleUtterances
 * @property string $responseCard
 * @property 'NONE'|'DEFAULT_OBFUSCATION' $obfuscationSetting
 * @property SlotDefaultValueSpec $defaultValueSpec
 */
class Slot extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     slotConstraint: 'Required'|'Optional',
     *     slotType?: string,
     *     slotTypeVersion?: string,
     *     valueElicitationPrompt?: Prompt,
     *     priority?: int<0, 100>,
     *     sampleUtterances?: list<string>,
     *     responseCard?: string,
     *     obfuscationSetting?: 'NONE'|'DEFAULT_OBFUSCATION',
     *     defaultValueSpec?: SlotDefaultValueSpec
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
