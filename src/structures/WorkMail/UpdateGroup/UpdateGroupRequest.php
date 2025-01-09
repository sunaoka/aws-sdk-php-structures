<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 * @property bool $HiddenFromGlobalAddressList
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string,
     *     HiddenFromGlobalAddressList?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
