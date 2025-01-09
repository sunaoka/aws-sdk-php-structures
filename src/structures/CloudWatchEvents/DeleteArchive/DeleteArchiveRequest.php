<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeleteArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 */
class DeleteArchiveRequest extends Request
{
    /**
     * @param array{ArchiveName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
