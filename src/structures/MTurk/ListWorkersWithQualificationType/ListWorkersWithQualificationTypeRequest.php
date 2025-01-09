<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkersWithQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property 'Granted'|'Revoked' $Status
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListWorkersWithQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     Status?: 'Granted'|'Revoked',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
