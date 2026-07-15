<?php

namespace Sunaoka\Aws\Structures\HealthLake\StartDataTransformationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TransformationInputDataConfig $InputDataConfig
 * @property Shapes\TransformationOutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string $ClientToken
 * @property string|null $JobName
 * @property string $ProfileId
 * @property bool|null $DriftDetectionEnabled
 * @property bool|null $ProvenanceEnabled
 */
class StartDataTransformationJobRequest extends Request
{
    /**
     * @param array{
     *     InputDataConfig: Shapes\TransformationInputDataConfig,
     *     OutputDataConfig: Shapes\TransformationOutputDataConfig,
     *     DataAccessRoleArn: string,
     *     ClientToken: string,
     *     JobName?: string|null,
     *     ProfileId: string,
     *     DriftDetectionEnabled?: bool|null,
     *     ProvenanceEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
