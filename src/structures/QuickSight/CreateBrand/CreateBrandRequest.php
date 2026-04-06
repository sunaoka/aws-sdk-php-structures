<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 * @property Shapes\BrandDefinition|null $BrandDefinition
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateBrandRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandId: string,
     *     BrandDefinition?: Shapes\BrandDefinition|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
