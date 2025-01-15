<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property Shapes\GroupVersion|null $InitialVersion
 * @property string $Name
 * @property array<string, string>|null $tags
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     InitialVersion?: Shapes\GroupVersion|null,
     *     Name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
