<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ShareDirectory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string|null $ShareNotes
 * @property Shapes\ShareTarget $ShareTarget
 * @property 'ORGANIZATIONS'|'HANDSHAKE' $ShareMethod
 */
class ShareDirectoryRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     ShareNotes?: string|null,
     *     ShareTarget: Shapes\ShareTarget,
     *     ShareMethod: 'ORGANIZATIONS'|'HANDSHAKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
