<?php

namespace Sunaoka\Aws\Structures\Iam\GetContextKeysForPrincipalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicySourceArn
 * @property list<string>|null $PolicyInputList
 */
class GetContextKeysForPrincipalPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicySourceArn: string,
     *     PolicyInputList?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
