<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListSecurityControlDefinitions;

trait ListSecurityControlDefinitionsTrait
{
    /**
     * @param ListSecurityControlDefinitionsRequest $args
     * @return ListSecurityControlDefinitionsResponse
     */
    public function listSecurityControlDefinitions(ListSecurityControlDefinitionsRequest $args)
    {
        $result = parent::listSecurityControlDefinitions($args->toArray());
        return new ListSecurityControlDefinitionsResponse($result->toArray());
    }
}
