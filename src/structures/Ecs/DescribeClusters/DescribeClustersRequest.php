<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $clusters
 * @property list<'ATTACHMENTS'|'CONFIGURATIONS'|'SETTINGS'|'STATISTICS'|'TAGS'>|null $include
 */
class DescribeClustersRequest extends Request
{
    /**
     * @param array{
     *     clusters?: list<string>|null,
     *     include?: list<'ATTACHMENTS'|'CONFIGURATIONS'|'SETTINGS'|'STATISTICS'|'TAGS'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
