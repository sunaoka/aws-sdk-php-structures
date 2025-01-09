<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateInferenceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inferenceProfileName
 * @property string $description
 * @property string $clientRequestToken
 * @property Shapes\InferenceProfileModelSource $modelSource
 * @property list<Shapes\Tag> $tags
 */
class CreateInferenceProfileRequest extends Request
{
    /**
     * @param array{
     *     inferenceProfileName: string,
     *     description?: string,
     *     clientRequestToken?: string,
     *     modelSource: Shapes\InferenceProfileModelSource,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
