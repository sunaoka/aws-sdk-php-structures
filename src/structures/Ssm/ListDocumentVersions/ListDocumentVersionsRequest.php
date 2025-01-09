<?php

namespace Sunaoka\Aws\Structures\Ssm\ListDocumentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListDocumentVersionsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
