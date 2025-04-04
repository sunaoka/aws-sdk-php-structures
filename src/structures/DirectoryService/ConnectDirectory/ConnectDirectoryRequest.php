<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ConnectDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ShortName
 * @property string $Password
 * @property string|null $Description
 * @property 'Small'|'Large' $Size
 * @property Shapes\DirectoryConnectSettings $ConnectSettings
 * @property list<Shapes\Tag>|null $Tags
 */
class ConnectDirectoryRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ShortName?: string|null,
     *     Password: string,
     *     Description?: string|null,
     *     Size: 'Small'|'Large',
     *     ConnectSettings: Shapes\DirectoryConnectSettings,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
