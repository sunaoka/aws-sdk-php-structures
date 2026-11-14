<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetAlias;

trait SetAliasTrait
{
    /**
     * @param SetAliasRequest $args
     * @return void
     */
    public function setAlias(SetAliasRequest $args)
    {
        parent::setAlias($args->toArray());
    }
}
