<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 */
class GetSamplingRulesRequest extends Request
{
    /**
     * @param array{NextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
