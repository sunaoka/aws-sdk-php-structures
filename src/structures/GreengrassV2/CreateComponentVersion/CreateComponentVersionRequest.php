<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inlineRecipe
 * @property Shapes\LambdaFunctionRecipeSource $lambdaFunction
 * @property array<string, string> $tags
 * @property string $clientToken
 */
class CreateComponentVersionRequest extends Request
{
    /**
     * @param array{
     *     inlineRecipe?: string,
     *     lambdaFunction?: Shapes\LambdaFunctionRecipeSource,
     *     tags?: array<string, string>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
