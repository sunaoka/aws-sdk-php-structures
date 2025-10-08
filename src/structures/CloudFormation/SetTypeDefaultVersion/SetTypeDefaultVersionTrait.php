<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetTypeDefaultVersion;

trait SetTypeDefaultVersionTrait
{
    /**
     * @param SetTypeDefaultVersionRequest $args
     * @return SetTypeDefaultVersionResponse
     */
    public function setTypeDefaultVersion(SetTypeDefaultVersionRequest $args)
    {
        $result = parent::setTypeDefaultVersion($args->toArray());
        return new SetTypeDefaultVersionResponse($result->toArray());
    }
}
