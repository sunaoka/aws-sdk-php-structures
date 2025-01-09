<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 * @property Shapes\BrandDefinition $BrandDefinition
 */
class UpdateBrandRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandId: string,
     *     BrandDefinition?: Shapes\BrandDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
