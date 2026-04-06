<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplicationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListApplicationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
