<?php

namespace Sunaoka\Aws\Structures\RedshiftDataAPIService\GetStatementResultV2;

trait GetStatementResultV2Trait
{
    /**
     * @param GetStatementResultV2Request $args
     * @return GetStatementResultV2Response
     */
    public function getStatementResultV2(GetStatementResultV2Request $args)
    {
        $result = parent::getStatementResultV2($args->toArray());
        return new GetStatementResultV2Response($result->toArray());
    }
}
