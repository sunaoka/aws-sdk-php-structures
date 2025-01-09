<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrandPublishedVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 */
class DescribeBrandPublishedVersionRequest extends Request
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
