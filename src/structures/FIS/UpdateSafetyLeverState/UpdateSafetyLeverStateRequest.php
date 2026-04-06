<?php

namespace Sunaoka\Aws\Structures\FIS\UpdateSafetyLeverState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property Shapes\UpdateSafetyLeverStateInput $state
 */
class UpdateSafetyLeverStateRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     state: Shapes\UpdateSafetyLeverStateInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
