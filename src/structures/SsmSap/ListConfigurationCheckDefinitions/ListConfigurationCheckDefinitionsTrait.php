<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListConfigurationCheckDefinitions;

trait ListConfigurationCheckDefinitionsTrait
{
    /**
     * @param ListConfigurationCheckDefinitionsRequest $args
     * @return ListConfigurationCheckDefinitionsResponse
     */
    public function listConfigurationCheckDefinitions(ListConfigurationCheckDefinitionsRequest $args)
    {
        $result = parent::listConfigurationCheckDefinitions($args->toArray());
        return new ListConfigurationCheckDefinitionsResponse($result->toArray());
    }
}
