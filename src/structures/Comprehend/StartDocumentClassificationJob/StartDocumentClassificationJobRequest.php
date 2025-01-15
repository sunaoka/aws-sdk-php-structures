<?php

namespace Sunaoka\Aws\Structures\Comprehend\StartDocumentClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $JobName
 * @property string|null $DocumentClassifierArn
 * @property Shapes\InputDataConfig $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property string $DataAccessRoleArn
 * @property string|null $ClientRequestToken
 * @property string|null $VolumeKmsKeyId
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $FlywheelArn
 */
class StartDocumentClassificationJobRequest extends Request
{
    /**
     * @param array{
     *     JobName?: string|null,
     *     DocumentClassifierArn?: string|null,
     *     InputDataConfig: Shapes\InputDataConfig,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     DataAccessRoleArn: string,
     *     ClientRequestToken?: string|null,
     *     VolumeKmsKeyId?: string|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     FlywheelArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
