<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCopyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceModelArn
 * @property string $targetModelName
 * @property string|null $modelKmsKeyId
 * @property list<Shapes\Tag>|null $targetModelTags
 * @property string|null $clientRequestToken
 */
class CreateModelCopyJobRequest extends Request
{
    /**
     * @param array{
     *     sourceModelArn: string,
     *     targetModelName: string,
     *     modelKmsKeyId?: string|null,
     *     targetModelTags?: list<Shapes\Tag>|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
