<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\BatchDeleteCustomVocabularyItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $itemId
 * @property string|null $errorMessage
 * @property 'DUPLICATE_INPUT'|'RESOURCE_DOES_NOT_EXIST'|'RESOURCE_ALREADY_EXISTS'|'INTERNAL_SERVER_FAILURE'|null $errorCode
 */
class FailedCustomVocabularyItem extends Shape
{
    /**
     * @param array{
     *     itemId?: string|null,
     *     errorMessage?: string|null,
     *     errorCode?: 'DUPLICATE_INPUT'|'RESOURCE_DOES_NOT_EXIST'|'RESOURCE_ALREADY_EXISTS'|'INTERNAL_SERVER_FAILURE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
