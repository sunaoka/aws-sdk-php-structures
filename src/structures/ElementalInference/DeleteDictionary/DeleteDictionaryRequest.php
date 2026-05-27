<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteDictionary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteDictionaryRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
