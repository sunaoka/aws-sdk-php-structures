<?php

namespace Sunaoka\Aws\Structures\Glue\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyInJson
 * @property string $ResourceArn
 * @property string $PolicyHashCondition
 * @property 'MUST_EXIST'|'NOT_EXIST'|'NONE' $PolicyExistsCondition
 * @property 'TRUE'|'FALSE' $EnableHybrid
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyInJson: string,
     *     ResourceArn?: string,
     *     PolicyHashCondition?: string,
     *     PolicyExistsCondition?: 'MUST_EXIST'|'NOT_EXIST'|'NONE',
     *     EnableHybrid?: 'TRUE'|'FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
