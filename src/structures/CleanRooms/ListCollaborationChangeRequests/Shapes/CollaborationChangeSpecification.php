<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListCollaborationChangeRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'ADD_MEMBER'|'GRANT_RECEIVE_RESULTS_ABILITY'|'REVOKE_RECEIVE_RESULTS_ABILITY'|'GRANT_EXPORT_QUERY_ANALYSIS_LOG_ABILITY'|'REVOKE_EXPORT_QUERY_ANALYSIS_LOG_ABILITY'>|null $autoApprovedChangeTypes
 */
class CollaborationChangeSpecification extends Shape
{
    /**
     * @param array{autoApprovedChangeTypes?: list<'ADD_MEMBER'|'GRANT_RECEIVE_RESULTS_ABILITY'|'REVOKE_RECEIVE_RESULTS_ABILITY'|'GRANT_EXPORT_QUERY_ANALYSIS_LOG_ABILITY'|'REVOKE_EXPORT_QUERY_ANALYSIS_LOG_ABILITY'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
