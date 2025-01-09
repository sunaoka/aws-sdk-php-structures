<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchCreateCustomVocabularyItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemId
 * @property string $errorMessage
 * @property 'DUPLICATE_INPUT'|'RESOURCE_DOES_NOT_EXIST'|'RESOURCE_ALREADY_EXISTS'|'INTERNAL_SERVER_FAILURE' $errorCode
 */
class FailedCustomVocabularyItem extends Shape
{
    /**
     * @param array{
     *     itemId?: string,
     *     errorMessage?: string,
     *     errorCode?: 'DUPLICATE_INPUT'|'RESOURCE_DOES_NOT_EXIST'|'RESOURCE_ALREADY_EXISTS'|'INTERNAL_SERVER_FAILURE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
