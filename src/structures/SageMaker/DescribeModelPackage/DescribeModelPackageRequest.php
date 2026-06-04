<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelPackageName
 * @property 'AllData'|'MetadataOnly'|null $IncludedData
 */
class DescribeModelPackageRequest extends Request
{
    /**
     * @param array{
     *     ModelPackageName: string,
     *     IncludedData?: 'AllData'|'MetadataOnly'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
