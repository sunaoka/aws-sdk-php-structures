<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $LanguageCode
 * @property string|null $OriginationNumber
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $VoiceId
 */
class VoiceMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     LanguageCode?: string|null,
     *     OriginationNumber?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     VoiceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
