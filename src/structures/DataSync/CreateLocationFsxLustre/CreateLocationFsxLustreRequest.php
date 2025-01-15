<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxLustre;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FsxFilesystemArn
 * @property list<string> $SecurityGroupArns
 * @property string|null $Subdirectory
 * @property list<Shapes\TagListEntry>|null $Tags
 */
class CreateLocationFsxLustreRequest extends Request
{
    /**
     * @param array{
     *     FsxFilesystemArn: string,
     *     SecurityGroupArns: list<string>,
     *     Subdirectory?: string|null,
     *     Tags?: list<Shapes\TagListEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
