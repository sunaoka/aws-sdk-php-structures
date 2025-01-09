<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyClientProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\ClientProperties $ClientProperties
 */
class ModifyClientPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     ClientProperties: Shapes\ClientProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
