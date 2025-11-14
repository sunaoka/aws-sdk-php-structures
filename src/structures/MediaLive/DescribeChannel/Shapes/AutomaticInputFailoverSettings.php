<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ErrorClearTimeMsec
 * @property list<FailoverCondition>|null $FailoverConditions
 * @property 'EQUAL_INPUT_PREFERENCE'|'PRIMARY_INPUT_PREFERRED'|null $InputPreference
 * @property string $SecondaryInputId
 */
class AutomaticInputFailoverSettings extends Shape
{
    /**
     * @param array{
     *     ErrorClearTimeMsec?: int|null,
     *     FailoverConditions?: list<FailoverCondition>|null,
     *     InputPreference?: 'EQUAL_INPUT_PREFERENCE'|'PRIMARY_INPUT_PREFERRED'|null,
     *     SecondaryInputId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
