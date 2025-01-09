<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $ErrorClearTimeMsec
 * @property list<FailoverCondition> $FailoverConditions
 * @property 'EQUAL_INPUT_PREFERENCE'|'PRIMARY_INPUT_PREFERRED' $InputPreference
 * @property string $SecondaryInputId
 */
class AutomaticInputFailoverSettings extends Shape
{
    /**
     * @param array{
     *     ErrorClearTimeMsec?: int<1, max>,
     *     FailoverConditions?: list<FailoverCondition>,
     *     InputPreference?: 'EQUAL_INPUT_PREFERENCE'|'PRIMARY_INPUT_PREFERRED',
     *     SecondaryInputId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
