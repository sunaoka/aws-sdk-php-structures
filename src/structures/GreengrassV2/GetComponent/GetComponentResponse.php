<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetComponent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'JSON'|'YAML' $recipeOutputFormat
 * @property \Psr\Http\Message\StreamInterface $recipe
 * @property array<string, string>|null $tags
 */
class GetComponentResponse extends Response
{
}
