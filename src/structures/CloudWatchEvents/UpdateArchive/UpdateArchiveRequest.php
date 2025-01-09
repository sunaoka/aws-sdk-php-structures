<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\UpdateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string $Description
 * @property string $EventPattern
 * @property int $RetentionDays
 */
class UpdateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     Description?: string,
     *     EventPattern?: string,
     *     RetentionDays?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
