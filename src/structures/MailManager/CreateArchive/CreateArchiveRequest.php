<?php

namespace Sunaoka\Aws\Structures\MailManager\CreateArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveName
 * @property string|null $ClientToken
 * @property string|null $KmsKeyArn
 * @property Shapes\ArchiveRetention|null $Retention
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateArchiveRequest extends Request
{
    /**
     * @param array{
     *     ArchiveName: string,
     *     ClientToken?: string|null,
     *     KmsKeyArn?: string|null,
     *     Retention?: Shapes\ArchiveRetention|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
