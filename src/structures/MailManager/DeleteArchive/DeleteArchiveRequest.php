<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 */
class DeleteArchiveRequest extends Request
{
    /**
     * @param array{ArchiveId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
