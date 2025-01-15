<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportArn
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     ExportArn: string,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
