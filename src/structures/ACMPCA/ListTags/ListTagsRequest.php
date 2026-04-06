<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListTagsRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
