<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EncryptionAtRestOptions $Options
 * @property OptionStatus $Status
 */
class EncryptionAtRestOptionsStatus extends Shape
{
    /**
     * @param array{
     *     Options: EncryptionAtRestOptions,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
