<?php

namespace Sunaoka\Aws\Structures\Iam\GetContextKeysForCustomPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PolicyInputList
 */
class GetContextKeysForCustomPolicyRequest extends Request
{
    /**
     * @param array{PolicyInputList: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
