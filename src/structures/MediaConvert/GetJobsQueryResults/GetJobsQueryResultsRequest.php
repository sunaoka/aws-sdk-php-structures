<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetJobsQueryResultsRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
