<?php

namespace Sunaoka\Aws\Structures\MTurk\ListWorkersWithQualificationType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property 'Granted'|'Revoked'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListWorkersWithQualificationTypeRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     Status?: 'Granted'|'Revoked'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
