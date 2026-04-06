<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaborationChangeRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MEMBER'|'COLLABORATION' $specificationType
 * @property ChangeSpecification $specification
 * @property list<'ADD_MEMBER'|'GRANT_RECEIVE_RESULTS_ABILITY'|'REVOKE_RECEIVE_RESULTS_ABILITY'|'EDIT_AUTO_APPROVED_CHANGE_TYPES'> $types
 */
class Change extends Shape
{
    /**
     * @param array{
     *     specificationType: 'MEMBER'|'COLLABORATION',
     *     specification: ChangeSpecification,
     *     types: list<'ADD_MEMBER'|'GRANT_RECEIVE_RESULTS_ABILITY'|'REVOKE_RECEIVE_RESULTS_ABILITY'|'EDIT_AUTO_APPROVED_CHANGE_TYPES'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
