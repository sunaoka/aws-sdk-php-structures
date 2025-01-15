<?php

namespace Sunaoka\Aws\Structures\Textract\GetExpenseAnalysis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 */
class GetExpenseAnalysisRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
