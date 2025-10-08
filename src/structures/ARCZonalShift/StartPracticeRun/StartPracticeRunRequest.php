<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\StartPracticeRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 * @property string $awayFrom
 * @property string $comment
 */
class StartPracticeRunRequest extends Request
{
    /**
     * @param array{
     *     resourceIdentifier: string,
     *     awayFrom: string,
     *     comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
