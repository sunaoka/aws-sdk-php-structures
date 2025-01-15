<?php

namespace Sunaoka\Aws\Structures\Glacier\ListMultipartUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string|null $marker
 * @property string|null $limit
 */
class ListMultipartUploadsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     marker?: string|null,
     *     limit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
