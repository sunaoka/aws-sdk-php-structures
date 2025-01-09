<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetadataContent
 * @property string $EntityId
 */
class SAMLIdp extends Shape
{
    /**
     * @param array{
     *     MetadataContent: string,
     *     EntityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
