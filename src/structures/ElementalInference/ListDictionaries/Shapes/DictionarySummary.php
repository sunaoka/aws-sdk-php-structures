<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListDictionaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property 'eng'|'fra'|'ita'|'deu'|'spa'|'por' $language
 * @property 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED' $status
 */
class DictionarySummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     name: string,
     *     language: 'eng'|'fra'|'ita'|'deu'|'spa'|'por',
     *     status: 'CREATING'|'AVAILABLE'|'REFERENCED'|'DELETING'|'DELETED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
