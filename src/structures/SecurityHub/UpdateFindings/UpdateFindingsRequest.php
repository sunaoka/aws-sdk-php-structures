<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSecurityFindingFilters $Filters
 * @property Shapes\NoteUpdate $Note
 * @property 'ACTIVE'|'ARCHIVED' $RecordState
 */
class UpdateFindingsRequest extends Request
{
    /**
     * @param array{
     *     Filters: Shapes\AwsSecurityFindingFilters,
     *     Note?: Shapes\NoteUpdate,
     *     RecordState?: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
