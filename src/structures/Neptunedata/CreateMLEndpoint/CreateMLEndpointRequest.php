<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CreateMLEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $mlModelTrainingJobId
 * @property string $mlModelTransformJobId
 * @property bool $update
 * @property string $neptuneIamRoleArn
 * @property string $modelName
 * @property string $instanceType
 * @property int $instanceCount
 * @property string $volumeEncryptionKMSKey
 */
class CreateMLEndpointRequest extends Request
{
    /**
     * @param array{
     *     id?: string,
     *     mlModelTrainingJobId?: string,
     *     mlModelTransformJobId?: string,
     *     update?: bool,
     *     neptuneIamRoleArn?: string,
     *     modelName?: string,
     *     instanceType?: string,
     *     instanceCount?: int,
     *     volumeEncryptionKMSKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
