<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $importedModelName
 * @property string $roleArn
 * @property Shapes\ModelDataSource $modelDataSource
 * @property list<Shapes\Tag> $jobTags
 * @property list<Shapes\Tag> $importedModelTags
 * @property string $clientRequestToken
 * @property Shapes\VpcConfig $vpcConfig
 * @property string $importedModelKmsKeyId
 */
class CreateModelImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     importedModelName: string,
     *     roleArn: string,
     *     modelDataSource: Shapes\ModelDataSource,
     *     jobTags?: list<Shapes\Tag>,
     *     importedModelTags?: list<Shapes\Tag>,
     *     clientRequestToken?: string,
     *     vpcConfig?: Shapes\VpcConfig,
     *     importedModelKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
