<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property list<string>|null $SubnetIds
 * @property bool $EnableWorkDocs
 * @property bool|null $EnableSelfService
 * @property 'DEDICATED'|'SHARED'|null $Tenancy
 * @property list<Shapes\Tag>|null $Tags
 */
class RegisterWorkspaceDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     SubnetIds?: list<string>|null,
     *     EnableWorkDocs: bool,
     *     EnableSelfService?: bool|null,
     *     Tenancy?: 'DEDICATED'|'SHARED'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
