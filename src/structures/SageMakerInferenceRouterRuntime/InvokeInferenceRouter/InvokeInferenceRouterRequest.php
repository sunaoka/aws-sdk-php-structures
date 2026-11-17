<?php

namespace Sunaoka\Aws\Structures\SageMakerInferenceRouterRuntime\InvokeInferenceRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRouterName
 * @property string $RoutingTargetName
 * @property string|null $ContentType
 * @property string|null $Accept
 * @property string|null $InferenceId
 * @property string|null $PrefixAwareId
 * @property string|null $CustomAttributes
 * @property string|resource|\Psr\Http\Message\StreamInterface $Body
 */
class InvokeInferenceRouterRequest extends Request
{
    /**
     * @param array{
     *     InferenceRouterName: string,
     *     RoutingTargetName: string,
     *     ContentType?: string|null,
     *     Accept?: string|null,
     *     InferenceId?: string|null,
     *     PrefixAwareId?: string|null,
     *     CustomAttributes?: string|null,
     *     Body: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
