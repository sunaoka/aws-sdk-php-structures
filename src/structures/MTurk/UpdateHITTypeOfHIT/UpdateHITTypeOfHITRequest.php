<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateHITTypeOfHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property string $HITTypeId
 */
class UpdateHITTypeOfHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     HITTypeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
