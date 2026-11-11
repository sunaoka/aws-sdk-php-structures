<?php

namespace Sunaoka\Aws\Structures\Route53Profiles\ListProfileResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string|null $ResourceType
 * @property string|null $ResourceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListProfileResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     ResourceType?: string|null,
     *     ResourceArn?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
