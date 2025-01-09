<?php

namespace Sunaoka\Aws\Structures\Glacier\ListMultipartUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $marker
 * @property string $limit
 */
class ListMultipartUploadsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     marker?: string,
     *     limit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
