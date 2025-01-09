<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\StartAsyncInvoke;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property string $modelId
 * @property Shapes\ModelInputPayload $modelInput
 * @property Shapes\AsyncInvokeOutputDataConfig $outputDataConfig
 * @property list<Shapes\Tag> $tags
 */
class StartAsyncInvokeRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     modelId: string,
     *     modelInput: Shapes\ModelInputPayload,
     *     outputDataConfig: Shapes\AsyncInvokeOutputDataConfig,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
