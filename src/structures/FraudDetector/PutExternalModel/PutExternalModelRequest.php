<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutExternalModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelEndpoint
 * @property 'SAGEMAKER' $modelSource
 * @property string $invokeModelEndpointRoleArn
 * @property Shapes\ModelInputConfiguration $inputConfiguration
 * @property Shapes\ModelOutputConfiguration $outputConfiguration
 * @property 'ASSOCIATED'|'DISSOCIATED' $modelEndpointStatus
 * @property list<Shapes\Tag> $tags
 */
class PutExternalModelRequest extends Request
{
    /**
     * @param array{
     *     modelEndpoint: string,
     *     modelSource: 'SAGEMAKER',
     *     invokeModelEndpointRoleArn: string,
     *     inputConfiguration: Shapes\ModelInputConfiguration,
     *     outputConfiguration: Shapes\ModelOutputConfiguration,
     *     modelEndpointStatus: 'ASSOCIATED'|'DISSOCIATED',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
