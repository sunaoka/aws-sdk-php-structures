<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociationVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListAssociationVersionsRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
