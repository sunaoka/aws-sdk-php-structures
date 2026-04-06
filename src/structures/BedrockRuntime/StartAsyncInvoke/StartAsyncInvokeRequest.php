<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\StartAsyncInvoke;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property string $modelId
 * @property Shapes\ModelInputPayload $modelInput
 * @property Shapes\AsyncInvokeOutputDataConfig $outputDataConfig
 * @property list<Shapes\Tag>|null $tags
 */
class StartAsyncInvokeRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     modelId: string,
     *     modelInput: Shapes\ModelInputPayload,
     *     outputDataConfig: Shapes\AsyncInvokeOutputDataConfig,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
