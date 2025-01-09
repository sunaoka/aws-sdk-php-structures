<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string $ClientToken
 * @property string $KmsKeyArn
 * @property Shapes\ArchiveRetention $Retention
 * @property list<Shapes\Tag> $Tags
 */
class CreateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     ClientToken?: string,
     *     KmsKeyArn?: string,
     *     Retention?: Shapes\ArchiveRetention,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
