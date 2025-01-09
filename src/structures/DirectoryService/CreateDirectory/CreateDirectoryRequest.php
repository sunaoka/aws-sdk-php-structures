<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ShortName
 * @property string $Password
 * @property string $Description
 * @property 'Small'|'Large' $Size
 * @property Shapes\DirectoryVpcSettings $VpcSettings
 * @property list<Shapes\Tag> $Tags
 */
class CreateDirectoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ShortName?: string,
     *     Password: string,
     *     Description?: string,
     *     Size: 'Small'|'Large',
     *     VpcSettings?: Shapes\DirectoryVpcSettings,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
