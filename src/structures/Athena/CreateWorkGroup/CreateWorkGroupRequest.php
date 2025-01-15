<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\WorkGroupConfiguration|null $Configuration
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWorkGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration?: Shapes\WorkGroupConfiguration|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
