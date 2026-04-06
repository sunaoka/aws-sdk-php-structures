<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 * @property bool|null $HiddenFromGlobalAddressList
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string,
     *     HiddenFromGlobalAddressList?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
