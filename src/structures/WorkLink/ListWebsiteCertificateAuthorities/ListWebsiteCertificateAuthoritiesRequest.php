<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListWebsiteCertificateAuthorities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class ListWebsiteCertificateAuthoritiesRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
