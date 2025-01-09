<?php

namespace Sunaoka\Aws\Structures\WorkMail\DescribeMailboxExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string $OrganizationId
 */
class DescribeMailboxExportJobRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     OrganizationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
