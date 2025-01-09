<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Group
 * @property string $Description
 * @property int<1, 10> $Criticality
 * @property string $Owner
 * @property string $DisplayName
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     Group?: string,
     *     Description?: string,
     *     Criticality?: int<1, 10>,
     *     Owner?: string,
     *     DisplayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
