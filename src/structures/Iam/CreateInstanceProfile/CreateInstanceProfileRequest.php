<?php

namespace Sunaoka\Aws\Structures\Iam\CreateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property string $Path
 * @property list<Shapes\Tag> $Tags
 */
class CreateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     Path?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
