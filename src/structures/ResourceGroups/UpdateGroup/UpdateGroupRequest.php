<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $Group
 * @property string|null $Description
 * @property int<1, 10>|null $Criticality
 * @property string|null $Owner
 * @property string|null $DisplayName
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     Group?: string|null,
     *     Description?: string|null,
     *     Criticality?: int<1, 10>|null,
     *     Owner?: string|null,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
