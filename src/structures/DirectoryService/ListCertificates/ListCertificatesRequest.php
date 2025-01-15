<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string|null $NextToken
 * @property int<1, 50>|null $Limit
 */
class ListCertificatesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     NextToken?: string|null,
     *     Limit?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
