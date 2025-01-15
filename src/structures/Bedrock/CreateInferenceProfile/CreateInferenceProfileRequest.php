<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateInferenceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inferenceProfileName
 * @property string|null $description
 * @property string|null $clientRequestToken
 * @property Shapes\InferenceProfileModelSource $modelSource
 * @property list<Shapes\Tag>|null $tags
 */
class CreateInferenceProfileRequest extends Request
{
    /**
     * @param array{
     *     inferenceProfileName: string,
     *     description?: string|null,
     *     clientRequestToken?: string|null,
     *     modelSource: Shapes\InferenceProfileModelSource,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
