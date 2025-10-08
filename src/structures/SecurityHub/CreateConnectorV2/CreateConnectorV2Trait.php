<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2;

trait CreateConnectorV2Trait
{
    /**
     * @param CreateConnectorV2Request $args
     * @return CreateConnectorV2Response
     */
    public function createConnectorV2(CreateConnectorV2Request $args)
    {
        $result = parent::createConnectorV2($args->toArray());
        return new CreateConnectorV2Response($result->toArray());
    }
}
