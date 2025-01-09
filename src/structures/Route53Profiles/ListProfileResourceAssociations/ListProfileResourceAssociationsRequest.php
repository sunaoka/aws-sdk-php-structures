<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ProfileId
 * @property string $ResourceType
 */
class ListProfileResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ProfileId: string,
     *     ResourceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
