<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateMultiRegionAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property PublicAccessBlockConfiguration $PublicAccessBlock
 * @property list<Region> $Regions
 */
class CreateMultiRegionAccessPointInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     PublicAccessBlock?: PublicAccessBlockConfiguration,
     *     Regions: list<Region>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
