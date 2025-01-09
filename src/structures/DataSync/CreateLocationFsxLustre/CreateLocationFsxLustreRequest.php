<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxLustre;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FsxFilesystemArn
 * @property list<string> $SecurityGroupArns
 * @property string $Subdirectory
 * @property list<Shapes\TagListEntry> $Tags
 */
class CreateLocationFsxLustreRequest extends Request
{
    /**
     * @param array{
     *     FsxFilesystemArn: string,
     *     SecurityGroupArns: list<string>,
     *     Subdirectory?: string,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
