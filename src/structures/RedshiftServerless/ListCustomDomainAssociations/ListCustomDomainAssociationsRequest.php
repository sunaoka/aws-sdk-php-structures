<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListCustomDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customDomainCertificateArn
 * @property string $customDomainName
 * @property int $maxResults
 * @property string $nextToken
 */
class ListCustomDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     customDomainCertificateArn?: string,
     *     customDomainName?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
