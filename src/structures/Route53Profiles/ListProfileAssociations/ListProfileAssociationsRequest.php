<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceId
 * @property string|null $ProfileId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListProfileAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     ProfileId?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
