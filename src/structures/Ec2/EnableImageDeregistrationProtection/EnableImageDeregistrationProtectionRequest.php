<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableImageDeregistrationProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property bool|null $WithCooldown
 * @property bool|null $DryRun
 */
class EnableImageDeregistrationProtectionRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     WithCooldown?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
