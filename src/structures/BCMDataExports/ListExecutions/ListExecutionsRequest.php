<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 * @property int<1, max> $MaxResults
 * @property string $NextToken
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     ExportArn: string,
     *     MaxResults?: int<1, max>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
