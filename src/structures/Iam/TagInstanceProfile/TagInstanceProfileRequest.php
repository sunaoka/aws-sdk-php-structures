<?php

namespace Sunaoka\Aws\Structures\Iam\TagInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property list<Shapes\Tag> $Tags
 */
class TagInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
