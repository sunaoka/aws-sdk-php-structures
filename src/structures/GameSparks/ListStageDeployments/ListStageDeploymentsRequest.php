<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStageDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $StageName
 */
class ListStageDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     StageName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
