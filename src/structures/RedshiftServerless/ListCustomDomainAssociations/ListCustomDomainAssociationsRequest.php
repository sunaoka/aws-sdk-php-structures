<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListCustomDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $customDomainCertificateArn
 * @property string|null $customDomainName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListCustomDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     customDomainCertificateArn?: string|null,
     *     customDomainName?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
