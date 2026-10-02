<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\CreateWebFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 * @property Shapes\RevisionConfig|null $revisionConfig
 * @property Shapes\EndpointConfig|null $endpointConfig
 * @property array<string, string>|null $tags
 */
class CreateWebFunctionRequest extends Request
{
    /**
     * @param array{
     *     functionName: string,
     *     revisionConfig?: Shapes\RevisionConfig|null,
     *     endpointConfig?: Shapes\EndpointConfig|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
