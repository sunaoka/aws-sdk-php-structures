<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property string $NextToken
 * @property int<1, 50> $Limit
 */
class ListCertificatesRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     NextToken?: string,
     *     Limit?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
