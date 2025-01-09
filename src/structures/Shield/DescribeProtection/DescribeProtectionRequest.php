<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProtectionId
 * @property string $ResourceArn
 */
class DescribeProtectionRequest extends Request
{
    /**
     * @param array{
     *     ProtectionId?: string,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
