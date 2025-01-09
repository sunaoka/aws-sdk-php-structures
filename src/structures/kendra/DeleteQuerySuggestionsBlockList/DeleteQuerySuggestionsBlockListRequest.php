<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 * @property string $Id
 */
class DeleteQuerySuggestionsBlockListRequest extends Request
{
    /**
     * @param array{
     *     IndexId: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
