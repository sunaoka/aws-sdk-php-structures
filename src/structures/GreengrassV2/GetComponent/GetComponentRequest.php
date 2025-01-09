<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetComponent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'JSON'|'YAML' $recipeOutputFormat
 * @property string $arn
 */
class GetComponentRequest extends Request
{
    /**
     * @param array{
     *     recipeOutputFormat?: 'JSON'|'YAML',
     *     arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
