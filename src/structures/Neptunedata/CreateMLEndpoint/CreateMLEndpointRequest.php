<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CreateMLEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 * @property string|null $mlModelTrainingJobId
 * @property string|null $mlModelTransformJobId
 * @property bool|null $update
 * @property string|null $neptuneIamRoleArn
 * @property string|null $modelName
 * @property string|null $instanceType
 * @property int|null $instanceCount
 * @property string|null $volumeEncryptionKMSKey
 */
class CreateMLEndpointRequest extends Request
{
    /**
     * @param array{
     *     id?: string|null,
     *     mlModelTrainingJobId?: string|null,
     *     mlModelTransformJobId?: string|null,
     *     update?: bool|null,
     *     neptuneIamRoleArn?: string|null,
     *     modelName?: string|null,
     *     instanceType?: string|null,
     *     instanceCount?: int|null,
     *     volumeEncryptionKMSKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
