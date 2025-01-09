<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property int<0, 100> $MaxResults
 * @property string $NextToken
 * @property 'FORWARD'|'BACKWARD' $ScanDirection
 * @property 'DESCENDING'|'ASCENDING' $SortOrder
 * @property Shapes\StartPosition $StartPosition
 * @property string $ConnectionToken
 */
class GetTranscriptRequest extends Request
{
    /**
     * @param array{
     *     ContactId?: string,
     *     MaxResults?: int<0, 100>,
     *     NextToken?: string,
     *     ScanDirection?: 'FORWARD'|'BACKWARD',
     *     SortOrder?: 'DESCENDING'|'ASCENDING',
     *     StartPosition?: Shapes\StartPosition,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
