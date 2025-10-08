<?php

namespace Sunaoka\Aws\Structures\Chatbot\DisassociateFromConfiguration;

trait DisassociateFromConfigurationTrait
{
    /**
     * @param DisassociateFromConfigurationRequest $args
     * @return DisassociateFromConfigurationResponse
     */
    public function disassociateFromConfiguration(DisassociateFromConfigurationRequest $args)
    {
        $result = parent::disassociateFromConfiguration($args->toArray());
        return new DisassociateFromConfigurationResponse($result->toArray());
    }
}
