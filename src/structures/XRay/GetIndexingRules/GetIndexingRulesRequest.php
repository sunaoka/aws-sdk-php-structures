<?php

namespace Sunaoka\Aws\Structures\XRay\GetIndexingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class GetIndexingRulesRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
