<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateMultiRegionAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property PublicAccessBlockConfiguration|null $PublicAccessBlock
 * @property list<Region> $Regions
 */
class CreateMultiRegionAccessPointInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     PublicAccessBlock?: PublicAccessBlockConfiguration|null,
     *     Regions: list<Region>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
