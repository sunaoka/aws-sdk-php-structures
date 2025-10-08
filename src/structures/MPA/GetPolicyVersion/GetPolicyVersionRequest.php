<?php

namespace Sunaoka\Aws\Structures\MPA\GetPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyVersionArn
 */
class GetPolicyVersionRequest extends Request
{
    /**
     * @param array{PolicyVersionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
