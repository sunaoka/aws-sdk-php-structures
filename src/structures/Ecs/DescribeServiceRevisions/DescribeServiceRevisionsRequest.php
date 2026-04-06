<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $serviceRevisionArns
 */
class DescribeServiceRevisionsRequest extends Request
{
    /**
     * @param array{serviceRevisionArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
