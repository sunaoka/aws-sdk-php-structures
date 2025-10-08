<?php

namespace Sunaoka\Aws\Structures\Polly\ListLexicons;

trait ListLexiconsTrait
{
    /**
     * @param ListLexiconsRequest $args
     * @return ListLexiconsResponse
     */
    public function listLexicons(ListLexiconsRequest $args)
    {
        $result = parent::listLexicons($args->toArray());
        return new ListLexiconsResponse($result->toArray());
    }
}
