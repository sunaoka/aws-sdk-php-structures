<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'eng'|'eng-au'|'eng-gb'|'eng-us'|'fra'|'ita'|'deu'|'spa'|'por' $language
 * @property AspectRatio|null $aspectRatio
 * @property string|null $dictionary
 * @property 'DISABLED'|'CENSOR'|'DROP'|null $profanityFilter
 */
class SubtitlingConfig extends Shape
{
    /**
     * @param array{
     *     language: 'eng'|'eng-au'|'eng-gb'|'eng-us'|'fra'|'ita'|'deu'|'spa'|'por',
     *     aspectRatio?: AspectRatio|null,
     *     dictionary?: string|null,
     *     profanityFilter?: 'DISABLED'|'CENSOR'|'DROP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
