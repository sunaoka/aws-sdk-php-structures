<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ContactId
 * @property int<0, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'FORWARD'|'BACKWARD'|null $ScanDirection
 * @property 'DESCENDING'|'ASCENDING'|null $SortOrder
 * @property Shapes\StartPosition|null $StartPosition
 * @property string $ConnectionToken
 */
class GetTranscriptRequest extends Request
{
    /**
     * @param array{
     *     ContactId?: string|null,
     *     MaxResults?: int<0, 100>|null,
     *     NextToken?: string|null,
     *     ScanDirection?: 'FORWARD'|'BACKWARD'|null,
     *     SortOrder?: 'DESCENDING'|'ASCENDING'|null,
     *     StartPosition?: Shapes\StartPosition|null,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
