<?php

namespace Sunaoka\Aws\Structures\Sts\AssumeRoleWithSAML;

trait AssumeRoleWithSAMLTrait
{
    /**
     * @param AssumeRoleWithSAMLRequest $args
     * @return AssumeRoleWithSAMLResponse
     */
    public function assumeRoleWithSAML(AssumeRoleWithSAMLRequest $args)
    {
        $result = parent::assumeRoleWithSAML($args->toArray());
        return new AssumeRoleWithSAMLResponse($result->toArray());
    }
}
