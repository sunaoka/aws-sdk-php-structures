<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $CertificateAuthorityArn
 */
class ListPermissionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     CertificateAuthorityArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
