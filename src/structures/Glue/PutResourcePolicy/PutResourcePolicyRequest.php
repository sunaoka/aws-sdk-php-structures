<?php

namespace Sunaoka\Aws\Structures\Glue\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyInJson
 * @property string|null $ResourceArn
 * @property string|null $PolicyHashCondition
 * @property 'MUST_EXIST'|'NOT_EXIST'|'NONE'|null $PolicyExistsCondition
 * @property 'TRUE'|'FALSE'|null $EnableHybrid
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyInJson: string,
     *     ResourceArn?: string|null,
     *     PolicyHashCondition?: string|null,
     *     PolicyExistsCondition?: 'MUST_EXIST'|'NOT_EXIST'|'NONE'|null,
     *     EnableHybrid?: 'TRUE'|'FALSE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
