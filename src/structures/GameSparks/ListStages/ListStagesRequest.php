<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListStagesRequest extends Request
{
    /**
     * @param array{
     *     GameName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
