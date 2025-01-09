<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConfigTypeData $configData
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateConfigRequest extends Request
{
    /**
     * @param array{
     *     configData: Shapes\ConfigTypeData,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
