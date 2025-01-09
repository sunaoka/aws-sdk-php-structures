<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $ProfileId
 * @property string $ResourceId
 */
class ListProfileAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
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
