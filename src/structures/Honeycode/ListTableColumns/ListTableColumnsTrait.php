<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTableColumns;

trait ListTableColumnsTrait
{
    /**
     * @param ListTableColumnsRequest $args
     * @return ListTableColumnsResponse
     */
    public function listTableColumns(ListTableColumnsRequest $args)
    {
        $result = parent::listTableColumns($args->toArray());
        return new ListTableColumnsResponse($result->toArray());
    }
}
