<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotebooks;

trait ListNotebooksTrait
{
    /**
     * @param ListNotebooksRequest $args
     * @return ListNotebooksResponse
     */
    public function listNotebooks(ListNotebooksRequest $args)
    {
        $result = parent::listNotebooks($args->toArray());
        return new ListNotebooksResponse($result->toArray());
    }
}
