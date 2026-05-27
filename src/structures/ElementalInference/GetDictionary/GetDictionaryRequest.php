<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetDictionary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetDictionaryRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
