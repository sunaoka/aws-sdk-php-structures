<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemonRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $daemonRevisionArns
 */
class DescribeDaemonRevisionsRequest extends Request
{
    /**
     * @param array{daemonRevisionArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
