<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListGroupingAttributeDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class ListGroupingAttributeDefinitionsRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
