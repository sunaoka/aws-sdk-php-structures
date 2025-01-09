<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $CertificateAuthorityArn
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     CertificateAuthorityArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
