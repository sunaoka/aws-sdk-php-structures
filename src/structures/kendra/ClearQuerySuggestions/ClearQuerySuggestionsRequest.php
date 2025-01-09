<?php

namespace Sunaoka\Aws\Structures\kendra\ClearQuerySuggestions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 */
class ClearQuerySuggestionsRequest extends Request
{
    /**
     * @param array{IndexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
