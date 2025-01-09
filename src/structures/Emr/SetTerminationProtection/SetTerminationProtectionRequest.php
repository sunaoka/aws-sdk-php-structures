<?php

namespace Sunaoka\Aws\Structures\Emr\SetTerminationProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobFlowIds
 * @property bool $TerminationProtected
 */
class SetTerminationProtectionRequest extends Request
{
    /**
     * @param array{
     *     JobFlowIds: list<string>,
     *     TerminationProtected: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
