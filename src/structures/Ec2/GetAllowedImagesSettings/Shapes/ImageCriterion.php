<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAllowedImagesSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ImageProviders
 * @property list<string>|null $MarketplaceProductCodes
 * @property list<string>|null $ImageNames
 * @property DeprecationTimeCondition|null $DeprecationTimeCondition
 * @property CreationDateCondition|null $CreationDateCondition
 */
class ImageCriterion extends Shape
{
    /**
     * @param array{
     *     ImageProviders?: list<string>|null,
     *     MarketplaceProductCodes?: list<string>|null,
     *     ImageNames?: list<string>|null,
     *     DeprecationTimeCondition?: DeprecationTimeCondition|null,
     *     CreationDateCondition?: CreationDateCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
