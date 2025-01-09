<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IndexId
 */
class DescribeQuerySuggestionsConfigRequest extends Request
{
    /**
     * @param array{IndexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
