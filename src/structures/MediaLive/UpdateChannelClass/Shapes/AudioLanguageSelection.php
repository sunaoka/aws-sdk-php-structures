<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageCode
 * @property 'LOOSE'|'STRICT'|null $LanguageSelectionPolicy
 */
class AudioLanguageSelection extends Shape
{
    /**
     * @param array{
     *     LanguageCode: string,
     *     LanguageSelectionPolicy?: 'LOOSE'|'STRICT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
