<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\StopUploadJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $JobId
 */
class StopUploadJobRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     JobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
