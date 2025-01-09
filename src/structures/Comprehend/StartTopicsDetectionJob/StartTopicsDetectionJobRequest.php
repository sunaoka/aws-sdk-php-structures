<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartTopicsDetectionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string $JobName
 * @property int $NumberOfTopics
 * @property string $ClientRequestToken
 * @property string $VolumeKmsKeyId
 * @property Shapes\VpcConfig $VpcConfig
 * @property list<Shapes\Tag> $Tags
 */
class StartTopicsDetectionJobRequest extends Request
{
    /**
     * @param array{
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     JobName?: string,
     *     NumberOfTopics?: int,
     *     ClientRequestToken?: string,
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
