<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string $EventSourceArn
 * @property string $Description
 * @property string $EventPattern
 * @property int<0, max> $RetentionDays
 */
class CreateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     EventSourceArn: string,
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
