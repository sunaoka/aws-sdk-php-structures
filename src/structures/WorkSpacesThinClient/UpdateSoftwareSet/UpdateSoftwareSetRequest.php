<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\UpdateSoftwareSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'VALIDATED'|'NOT_VALIDATED' $validationStatus
 */
class UpdateSoftwareSetRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     validationStatus: 'VALIDATED'|'NOT_VALIDATED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
