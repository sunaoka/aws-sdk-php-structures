<?php

namespace Sunaoka\Aws\Structures\LakeFormation\AssumeDecoratedRoleWithSAML;

trait AssumeDecoratedRoleWithSAMLTrait
{
    /**
     * @param AssumeDecoratedRoleWithSAMLRequest $args
     * @return AssumeDecoratedRoleWithSAMLResponse
     */
    public function assumeDecoratedRoleWithSAML(AssumeDecoratedRoleWithSAMLRequest $args)
    {
        $result = parent::assumeDecoratedRoleWithSAML($args->toArray());
        return new AssumeDecoratedRoleWithSAMLResponse($result->toArray());
    }
}
