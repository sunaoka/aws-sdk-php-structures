<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\CreateCell;

trait CreateCellTrait
{
    /**
     * @param CreateCellRequest $args
     * @return CreateCellResponse
     */
    public function createCell(CreateCellRequest $args)
    {
        $result = parent::createCell($args->toArray());
        return new CreateCellResponse($result->toArray());
    }
}
