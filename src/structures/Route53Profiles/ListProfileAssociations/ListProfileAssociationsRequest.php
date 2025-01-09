<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ProfileId
 * @property string $ResourceId
 */
class ListProfileAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ProfileId?: string,
     *     ResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
