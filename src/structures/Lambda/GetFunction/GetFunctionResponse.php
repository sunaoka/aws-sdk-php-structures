<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\FunctionConfiguration $Configuration
 * @property Shapes\FunctionCodeLocation $Code
 * @property array<string, string> $Tags
 * @property Shapes\TagsError $TagsError
 * @property Shapes\Concurrency $Concurrency
 */
class GetFunctionResponse extends Response
{
}
