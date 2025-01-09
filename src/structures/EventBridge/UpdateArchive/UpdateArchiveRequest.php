<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string $Description
 * @property string $EventPattern
 * @property int<0, max> $RetentionDays
 */
class UpdateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     Description?: string,
     *     EventPattern?: string,
     *     RetentionDays?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
