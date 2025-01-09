<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageDeregistrationProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool $WithCooldown
 * @property bool $DryRun
 */
class EnableImageDeregistrationProtectionRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     WithCooldown?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
