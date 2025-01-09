<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Name
 * @property bool $HiddenFromGlobalAddressList
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Name: string,
     *     HiddenFromGlobalAddressList?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
