<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AwsSecurityFindingFilters $Filters
 * @property Shapes\NoteUpdate|null $Note
 * @property 'ACTIVE'|'ARCHIVED'|null $RecordState
 */
class UpdateFindingsRequest extends Request
{
    /**
     * @param array{
     *     Filters: Shapes\AwsSecurityFindingFilters,
     *     Note?: Shapes\NoteUpdate|null,
     *     RecordState?: 'ACTIVE'|'ARCHIVED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
