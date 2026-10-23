<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $findingId
 */
class GetCodeFindingRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     findingId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
