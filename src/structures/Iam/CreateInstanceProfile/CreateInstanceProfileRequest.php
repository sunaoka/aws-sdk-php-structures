<?php

namespace Sunaoka\Aws\Structures\Iam\CreateInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property string|null $Path
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     Path?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
