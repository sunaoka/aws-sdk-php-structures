<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateDictionary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property 'eng'|'fra'|'ita'|'deu'|'spa'|'por'|'ara'|null $language
 * @property string|null $entries
 */
class UpdateDictionaryRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     language?: 'eng'|'fra'|'ita'|'deu'|'spa'|'por'|'ara'|null,
     *     entries?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
