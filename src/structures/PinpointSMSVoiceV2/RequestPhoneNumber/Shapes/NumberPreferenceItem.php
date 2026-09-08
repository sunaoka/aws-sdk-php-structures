<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'StartsWith'|'EndsWith'|'Contains'|'ExactMatch'> $PreferenceType
 * @property list<string> $Filter
 */
class NumberPreferenceItem extends Shape
{
    /**
     * @param array{
     *     PreferenceType: list<'StartsWith'|'EndsWith'|'Contains'|'ExactMatch'>,
     *     Filter: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
