<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\UpgradePublishedSchema;

trait UpgradePublishedSchemaTrait
{
    /**
     * @param UpgradePublishedSchemaRequest $args
     * @return UpgradePublishedSchemaResponse
     */
    public function upgradePublishedSchema(UpgradePublishedSchemaRequest $args)
    {
        $result = parent::upgradePublishedSchema($args->toArray());
        return new UpgradePublishedSchemaResponse($result->toArray());
    }
}
