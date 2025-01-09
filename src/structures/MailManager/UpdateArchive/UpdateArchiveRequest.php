<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property string $ArchiveName
 * @property Shapes\ArchiveRetention $Retention
 */
class UpdateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     ArchiveName?: string,
     *     Retention?: Shapes\ArchiveRetention
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
