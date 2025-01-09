<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\IndexingRuleValueUpdate $Rule
 */
class UpdateIndexingRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Rule: Shapes\IndexingRuleValueUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
