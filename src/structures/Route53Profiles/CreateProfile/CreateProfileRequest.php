<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\CreateProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProfileRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     Name: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
