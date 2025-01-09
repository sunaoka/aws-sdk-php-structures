<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property list<Shapes\Rule> $Rules
 */
class CheckCapacityRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Rules: list<Shapes\Rule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
