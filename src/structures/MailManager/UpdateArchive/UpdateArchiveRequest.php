<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property string|null $ArchiveName
 * @property Shapes\ArchiveRetention|null $Retention
 */
class UpdateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     ArchiveName?: string|null,
     *     Retention?: Shapes\ArchiveRetention|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
