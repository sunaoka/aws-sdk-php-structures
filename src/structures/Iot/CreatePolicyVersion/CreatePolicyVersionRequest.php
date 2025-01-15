<?php

namespace Sunaoka\Aws\Structures\Iot\CreatePolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property bool|null $setAsDefault
 */
class CreatePolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyDocument: string,
     *     setAsDefault?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
