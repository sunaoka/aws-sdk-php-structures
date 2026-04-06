<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListADAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DirectoryId
 * @property string|null $NextToken
 * @property int<1, 100>|null $Limit
 */
class ListADAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     NextToken?: string|null,
     *     Limit?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
