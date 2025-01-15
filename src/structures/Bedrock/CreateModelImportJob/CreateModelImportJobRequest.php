<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $importedModelName
 * @property string $roleArn
 * @property Shapes\ModelDataSource $modelDataSource
 * @property list<Shapes\Tag>|null $jobTags
 * @property list<Shapes\Tag>|null $importedModelTags
 * @property string|null $clientRequestToken
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property string|null $importedModelKmsKeyId
 */
class CreateModelImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     importedModelName: string,
     *     roleArn: string,
     *     modelDataSource: Shapes\ModelDataSource,
     *     jobTags?: list<Shapes\Tag>|null,
     *     importedModelTags?: list<Shapes\Tag>|null,
     *     clientRequestToken?: string|null,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     importedModelKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
