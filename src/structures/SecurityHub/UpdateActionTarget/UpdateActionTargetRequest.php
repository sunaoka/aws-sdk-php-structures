<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateActionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActionTargetArn
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateActionTargetRequest extends Request
{
    /**
     * @param array{
     *     ActionTargetArn: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
