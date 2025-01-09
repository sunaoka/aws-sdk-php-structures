<?php

namespace Sunaoka\Aws\Structures\WorkMail\CancelMailboxExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $JobId
 * @property string $OrganizationId
 */
class CancelMailboxExportJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     JobId: string,
     *     OrganizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
