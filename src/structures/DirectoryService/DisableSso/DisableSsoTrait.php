<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableSso;

trait DisableSsoTrait
{
    /**
     * @param DisableSsoRequest $args
     * @return DisableSsoResponse
     */
    public function disableSso(DisableSsoRequest $args)
    {
        $result = parent::disableSso($args->toArray());
        return new DisableSsoResponse($result->toArray());
    }
}
