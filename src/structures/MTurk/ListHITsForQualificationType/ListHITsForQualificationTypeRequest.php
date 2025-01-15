<?php

namespace Sunaoka\Aws\Structures\MTurk\ListHITsForQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListHITsForQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
