<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
