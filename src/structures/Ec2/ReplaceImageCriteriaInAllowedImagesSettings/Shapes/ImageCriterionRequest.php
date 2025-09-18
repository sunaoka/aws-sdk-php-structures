<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceImageCriteriaInAllowedImagesSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ImageProviders
 * @property list<string>|null $MarketplaceProductCodes
 * @property list<string>|null $ImageNames
 * @property DeprecationTimeConditionRequest|null $DeprecationTimeCondition
 * @property CreationDateConditionRequest|null $CreationDateCondition
 */
class ImageCriterionRequest extends Shape
{
    /**
     * @param array{
     *     ImageProviders?: list<string>|null,
     *     MarketplaceProductCodes?: list<string>|null,
     *     ImageNames?: list<string>|null,
     *     DeprecationTimeCondition?: DeprecationTimeConditionRequest|null,
     *     CreationDateCondition?: CreationDateConditionRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
