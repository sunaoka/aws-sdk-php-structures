<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateAlias;

trait CreateAliasTrait
{
    /**
     * @param CreateAliasRequest $args
     * @return CreateAliasResponse
     */
    public function createAlias(CreateAliasRequest $args)
    {
        $result = parent::createAlias($args->toArray());
        return new CreateAliasResponse($result->toArray());
    }
}
