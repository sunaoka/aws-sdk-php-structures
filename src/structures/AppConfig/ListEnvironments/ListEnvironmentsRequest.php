<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
