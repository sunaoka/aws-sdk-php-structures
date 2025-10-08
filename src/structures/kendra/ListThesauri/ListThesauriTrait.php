<?php

namespace Sunaoka\Aws\Structures\kendra\ListThesauri;

trait ListThesauriTrait
{
    /**
     * @param ListThesauriRequest $args
     * @return ListThesauriResponse
     */
    public function listThesauri(ListThesauriRequest $args)
    {
        $result = parent::listThesauri($args->toArray());
        return new ListThesauriResponse($result->toArray());
    }
}
