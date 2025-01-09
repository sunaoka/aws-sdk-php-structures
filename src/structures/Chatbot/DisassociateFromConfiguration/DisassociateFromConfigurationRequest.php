<?php

namespace Sunaoka\Aws\Structures\Chatbot\DisassociateFromConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property string $ChatConfiguration
 */
class DisassociateFromConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     ChatConfiguration: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
