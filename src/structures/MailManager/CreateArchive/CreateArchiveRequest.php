<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ArchiveName
 * @property Shapes\ArchiveRetention|null $Retention
 * @property string|null $KmsKeyArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ArchiveName: string,
     *     Retention?: Shapes\ArchiveRetention|null,
     *     KmsKeyArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
