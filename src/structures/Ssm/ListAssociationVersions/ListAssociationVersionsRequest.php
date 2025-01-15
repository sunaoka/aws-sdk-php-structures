<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAssociationVersionsRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
