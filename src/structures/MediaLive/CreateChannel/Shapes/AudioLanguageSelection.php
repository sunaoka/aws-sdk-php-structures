<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageCode
 * @property 'LOOSE'|'STRICT' $LanguageSelectionPolicy
 */
class AudioLanguageSelection extends Shape
{
    /**
     * @param array{
     *     LanguageCode: string,
     *     LanguageSelectionPolicy?: 'LOOSE'|'STRICT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
