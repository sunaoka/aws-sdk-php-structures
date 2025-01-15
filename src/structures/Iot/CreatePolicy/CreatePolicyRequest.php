<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyDocument: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
