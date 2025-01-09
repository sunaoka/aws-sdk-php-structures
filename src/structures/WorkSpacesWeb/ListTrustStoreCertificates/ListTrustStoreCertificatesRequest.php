<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStoreCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $trustStoreArn
 */
class ListTrustStoreCertificatesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
