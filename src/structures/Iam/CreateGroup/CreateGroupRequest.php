<?php

namespace Sunaoka\Aws\Structures\Iam\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Path
 * @property string $GroupName
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     Path?: string|null,
     *     GroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
