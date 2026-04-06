<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\ConfigTypeData $configData
 * @property array<string, string>|null $tags
 */
class CreateConfigRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     configData: Shapes\ConfigTypeData,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
