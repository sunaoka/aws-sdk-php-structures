<?php

namespace Sunaoka\Aws\Structures\Glacier\ListParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $uploadId
 * @property string $marker
 * @property string $limit
 */
class ListPartsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     uploadId: string,
     *     marker?: string,
     *     limit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
