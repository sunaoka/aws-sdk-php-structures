<?php

namespace Sunaoka\Aws\Structures\WorkLink\DescribeWebsiteCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $WebsiteCaId
 */
class DescribeWebsiteCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     WebsiteCaId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
