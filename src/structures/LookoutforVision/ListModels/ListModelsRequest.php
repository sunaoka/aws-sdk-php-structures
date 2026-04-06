<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
