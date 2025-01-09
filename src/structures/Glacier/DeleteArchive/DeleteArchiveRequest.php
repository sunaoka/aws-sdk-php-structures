<?php

namespace Sunaoka\Aws\Structures\Glacier\DeleteArchive;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $archiveId
 */
class DeleteArchiveRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     archiveId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
