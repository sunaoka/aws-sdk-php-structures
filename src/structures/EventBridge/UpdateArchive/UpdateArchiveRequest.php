<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string|null $Description
 * @property string|null $EventPattern
 * @property int<0, max>|null $RetentionDays
 * @property string|null $KmsKeyIdentifier
 */
class UpdateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     Description?: string|null,
     *     EventPattern?: string|null,
     *     RetentionDays?: int<0, max>|null,
     *     KmsKeyIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
