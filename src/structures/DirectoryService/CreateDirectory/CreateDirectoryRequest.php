<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ShortName
 * @property string $Password
 * @property string|null $Description
 * @property 'Small'|'Large' $Size
 * @property Shapes\DirectoryVpcSettings|null $VpcSettings
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDirectoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ShortName?: string|null,
     *     Password: string,
     *     Description?: string|null,
     *     Size: 'Small'|'Large',
     *     VpcSettings?: Shapes\DirectoryVpcSettings|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
