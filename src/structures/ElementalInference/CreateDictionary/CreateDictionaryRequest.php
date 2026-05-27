<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateDictionary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'eng'|'fra'|'ita'|'deu'|'spa'|'por' $language
 * @property string|null $entries
 * @property array<string, string>|null $tags
 */
class CreateDictionaryRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     language: 'eng'|'fra'|'ita'|'deu'|'spa'|'por',
     *     entries?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
