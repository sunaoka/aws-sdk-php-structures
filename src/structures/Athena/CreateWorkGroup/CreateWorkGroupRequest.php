<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\WorkGroupConfiguration $Configuration
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateWorkGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration?: Shapes\WorkGroupConfiguration,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
