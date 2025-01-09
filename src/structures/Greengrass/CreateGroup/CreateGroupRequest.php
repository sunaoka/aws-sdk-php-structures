<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property Shapes\GroupVersion $InitialVersion
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     InitialVersion?: Shapes\GroupVersion,
     *     Name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
