<?php

namespace Sunaoka\Aws\Structures\Ses\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $MaxItems
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxItems?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
