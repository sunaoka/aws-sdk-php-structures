<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpgradeAppliedSchema;

trait UpgradeAppliedSchemaTrait
{
    /**
     * @param UpgradeAppliedSchemaRequest $args
     * @return UpgradeAppliedSchemaResponse
     */
    public function upgradeAppliedSchema(UpgradeAppliedSchemaRequest $args)
    {
        $result = parent::upgradeAppliedSchema($args->toArray());
        return new UpgradeAppliedSchemaResponse($result->toArray());
    }
}
