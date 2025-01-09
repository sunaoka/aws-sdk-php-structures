<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteBrand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 */
class DeleteBrandRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
