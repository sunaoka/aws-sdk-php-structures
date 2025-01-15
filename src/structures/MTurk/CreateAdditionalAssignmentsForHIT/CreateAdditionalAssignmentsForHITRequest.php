<?php

namespace Sunaoka\Aws\Structures\MTurk\CreateAdditionalAssignmentsForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property int $NumberOfAdditionalAssignments
 * @property string|null $UniqueRequestToken
 */
class CreateAdditionalAssignmentsForHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     NumberOfAdditionalAssignments: int,
     *     UniqueRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
