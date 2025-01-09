<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrandPublishedVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandId
 * @property string $VersionId
 */
class UpdateBrandPublishedVersionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandId: string,
     *     VersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
