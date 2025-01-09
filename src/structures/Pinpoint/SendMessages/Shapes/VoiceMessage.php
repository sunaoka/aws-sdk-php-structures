<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $LanguageCode
 * @property string $OriginationNumber
 * @property array<string, list<string>> $Substitutions
 * @property string $VoiceId
 */
class VoiceMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     LanguageCode?: string,
     *     OriginationNumber?: string,
     *     Substitutions?: array<string, list<string>>,
     *     VoiceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
