<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 * @property string|null $VersionId
 */
class DescribeBrandRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandId: string,
     *     VersionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
