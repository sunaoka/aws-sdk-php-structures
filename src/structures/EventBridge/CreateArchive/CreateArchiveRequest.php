<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string $EventSourceArn
 * @property string|null $Description
 * @property string|null $EventPattern
 * @property int<0, max>|null $RetentionDays
 */
class CreateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     EventSourceArn: string,
     *     Description?: string|null,
     *     EventPattern?: string|null,
     *     RetentionDays?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
