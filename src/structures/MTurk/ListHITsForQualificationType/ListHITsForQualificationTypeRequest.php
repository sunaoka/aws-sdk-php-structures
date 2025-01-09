<?php

namespace Sunaoka\Aws\Structures\MTurk\ListHITsForQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListHITsForQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
