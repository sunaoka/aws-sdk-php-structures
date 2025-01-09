<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingArns
 */
class BatchGetFindingDetailsRequest extends Request
{
    /**
     * @param array{findingArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
