<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteFolder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 */
class DeleteFolderRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
