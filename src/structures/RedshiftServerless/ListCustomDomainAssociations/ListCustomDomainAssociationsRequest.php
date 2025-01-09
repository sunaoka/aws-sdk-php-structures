<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListCustomDomainAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customDomainCertificateArn
 * @property string $customDomainName
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListCustomDomainAssociationsRequest extends Request
{
    /**
     * @param array{
     *     customDomainCertificateArn?: string,
     *     customDomainName?: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
