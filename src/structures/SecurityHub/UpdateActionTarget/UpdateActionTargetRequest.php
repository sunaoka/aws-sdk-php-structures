<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateActionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionTargetArn
 * @property string $Name
 * @property string $Description
 */
class UpdateActionTargetRequest extends Request
{
    /**
     * @param array{
     *     ActionTargetArn: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
