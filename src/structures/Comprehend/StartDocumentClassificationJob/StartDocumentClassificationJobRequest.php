<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDocumentClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $DocumentClassifierArn
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string $ClientRequestToken
 * @property string $VolumeKmsKeyId
 * @property Shapes\VpcConfig $VpcConfig
 * @property list<Shapes\Tag> $Tags
 * @property string $FlywheelArn
 */
class StartDocumentClassificationJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string,
     *     DocumentClassifierArn?: string,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     ClientRequestToken?: string,
     *     VolumeKmsKeyId?: string,
     *     VpcConfig?: Shapes\VpcConfig,
     *     Tags?: list<Shapes\Tag>,
     *     FlywheelArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
