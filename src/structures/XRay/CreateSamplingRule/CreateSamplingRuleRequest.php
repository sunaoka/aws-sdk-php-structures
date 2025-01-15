<?php

namespace Sunaoka\Aws\Structures\XRay\CreateSamplingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SamplingRule $SamplingRule
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSamplingRuleRequest extends Request
{
    /**
     * @param array{
     *     SamplingRule: Shapes\SamplingRule,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
