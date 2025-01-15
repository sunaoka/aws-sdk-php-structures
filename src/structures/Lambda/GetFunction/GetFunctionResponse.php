<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\FunctionConfiguration|null $Configuration
 * @property Shapes\FunctionCodeLocation|null $Code
 * @property array<string, string>|null $Tags
 * @property Shapes\TagsError|null $TagsError
 * @property Shapes\Concurrency|null $Concurrency
 */
class GetFunctionResponse extends Response
{
}
