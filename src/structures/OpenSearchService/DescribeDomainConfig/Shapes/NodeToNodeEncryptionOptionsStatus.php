<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NodeToNodeEncryptionOptions $Options
 * @property OptionStatus $Status
 */
class NodeToNodeEncryptionOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: NodeToNodeEncryptionOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
