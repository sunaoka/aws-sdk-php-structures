<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetUploadJobPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $JobId
 */
class GetUploadJobPathRequest extends Request
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
