<?php

namespace Sunaoka\Aws\Structures\OpsWorksCM\CreateBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerName
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateBackupRequest extends Request
{
    /**
     * @param array{
     *     ServerName: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
