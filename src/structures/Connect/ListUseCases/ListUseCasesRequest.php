<?php

namespace Sunaoka\Aws\Structures\Connect\ListUseCases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $IntegrationAssociationId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListUseCasesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationAssociationId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
