<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ConnectDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ShortName
 * @property string $Password
 * @property string $Description
 * @property 'Small'|'Large' $Size
 * @property Shapes\DirectoryConnectSettings $ConnectSettings
 * @property list<Shapes\Tag> $Tags
 */
class ConnectDirectoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ShortName?: string,
     *     Password: string,
     *     Description?: string,
     *     Size: 'Small'|'Large',
     *     ConnectSettings: Shapes\DirectoryConnectSettings,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
