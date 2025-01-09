<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateRuleMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Rule $rule
 * @property string $description
 */
class UpdateRuleMetadataRequest extends Request
{
    /**
     * @param array{
     *     rule: Shapes\Rule,
     *     description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
