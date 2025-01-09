<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListApplicationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListApplicationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
