<?php

namespace Sunaoka\Aws\Structures\Shield\DescribeProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ProtectionId
 * @property string|null $ResourceArn
 */
class DescribeProtectionRequest extends Request
{
    /**
     * @param array{
     *     ProtectionId?: string|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
