<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $inlineRecipe
 * @property Shapes\LambdaFunctionRecipeSource|null $lambdaFunction
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateComponentVersionRequest extends Request
{
    /**
     * @param array{
     *     inlineRecipe?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     lambdaFunction?: Shapes\LambdaFunctionRecipeSource|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
