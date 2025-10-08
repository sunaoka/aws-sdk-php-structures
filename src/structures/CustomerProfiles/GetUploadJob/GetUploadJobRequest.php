<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetUploadJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $JobId
 */
class GetUploadJobRequest extends Request
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
