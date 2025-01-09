<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\CreateBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateBackupRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
