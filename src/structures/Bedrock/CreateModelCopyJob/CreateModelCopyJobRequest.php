<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCopyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceModelArn
 * @property string $targetModelName
 * @property string $modelKmsKeyId
 * @property list<Shapes\Tag> $targetModelTags
 * @property string $clientRequestToken
 */
class CreateModelCopyJobRequest extends Request
{
    /**
     * @param array{
     *     sourceModelArn: string,
     *     targetModelName: string,
     *     modelKmsKeyId?: string,
     *     targetModelTags?: list<Shapes\Tag>,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
