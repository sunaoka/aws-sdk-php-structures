<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property Shapes\JobUpdate $JobUpdate
 */
class UpdateJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobUpdate: Shapes\JobUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
