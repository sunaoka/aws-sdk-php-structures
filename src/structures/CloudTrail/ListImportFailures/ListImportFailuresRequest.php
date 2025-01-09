<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImportFailures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImportId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListImportFailuresRequest extends Request
{
    /**
     * @param array{
     *     ImportId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
