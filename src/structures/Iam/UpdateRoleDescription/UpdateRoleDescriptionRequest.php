<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateRoleDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoleName
 * @property string $Description
 */
class UpdateRoleDescriptionRequest extends Request
{
    /**
     * @param array{
     *     RoleName: string,
     *     Description: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
