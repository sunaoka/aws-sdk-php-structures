<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModelPackagingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property string $JobName
 * @property Shapes\ModelPackagingConfiguration $Configuration
 * @property string $Description
 * @property string $ClientToken
 */
class StartModelPackagingJobRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     JobName?: string,
     *     Configuration: Shapes\ModelPackagingConfiguration,
     *     Description?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
