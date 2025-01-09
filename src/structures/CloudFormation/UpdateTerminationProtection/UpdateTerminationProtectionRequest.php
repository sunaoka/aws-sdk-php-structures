<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateTerminationProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $EnableTerminationProtection
 * @property string $StackName
 */
class UpdateTerminationProtectionRequest extends Request
{
    /**
     * @param array{
     *     EnableTerminationProtection: bool,
     *     StackName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
