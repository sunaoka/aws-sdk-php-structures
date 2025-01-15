<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $ProfileId
 * @property string|null $ResourceType
 */
class ListProfileResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ProfileId: string,
     *     ResourceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
