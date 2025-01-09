<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $clusters
 * @property list<'ATTACHMENTS'|'CONFIGURATIONS'|'SETTINGS'|'STATISTICS'|'TAGS'> $include
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     clusters?: list<string>,
     *     include?: list<'ATTACHMENTS'|'CONFIGURATIONS'|'SETTINGS'|'STATISTICS'|'TAGS'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
