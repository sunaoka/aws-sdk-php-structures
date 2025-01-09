<?php

namespace Sunaoka\Aws\Structures\Ses\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxItems
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxItems?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
