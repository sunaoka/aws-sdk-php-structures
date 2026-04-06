<?php

namespace Sunaoka\Aws\Structures\MPA\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $PolicyName
 * @property 'AWS_MANAGED'|'AWS_RAM' $PolicyType
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     PolicyName: string,
     *     PolicyType: 'AWS_MANAGED'|'AWS_RAM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
