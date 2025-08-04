<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStoreCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustStoreArn
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 */
class ListTrustStoreCertificatesRequest extends Request
{
    /**
     * @param array{
     *     trustStoreArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
