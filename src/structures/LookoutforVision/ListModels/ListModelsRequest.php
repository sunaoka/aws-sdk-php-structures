<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
