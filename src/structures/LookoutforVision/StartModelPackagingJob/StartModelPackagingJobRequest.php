<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModelPackagingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $ModelVersion
 * @property string|null $JobName
 * @property Shapes\ModelPackagingConfiguration $Configuration
 * @property string|null $Description
 * @property string|null $ClientToken
 */
class StartModelPackagingJobRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     ModelVersion: string,
     *     JobName?: string|null,
     *     Configuration: Shapes\ModelPackagingConfiguration,
     *     Description?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
