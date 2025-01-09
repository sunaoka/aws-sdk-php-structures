<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 * @property Shapes\BrandDefinition $BrandDefinition
 * @property list<Shapes\Tag> $Tags
 */
class CreateBrandRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandId: string,
     *     BrandDefinition?: Shapes\BrandDefinition,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
