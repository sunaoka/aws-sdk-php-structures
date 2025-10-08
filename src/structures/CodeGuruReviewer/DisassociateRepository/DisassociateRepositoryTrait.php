<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DisassociateRepository;

trait DisassociateRepositoryTrait
{
    /**
     * @param DisassociateRepositoryRequest $args
     * @return DisassociateRepositoryResponse
     */
    public function disassociateRepository(DisassociateRepositoryRequest $args)
    {
        $result = parent::disassociateRepository($args->toArray());
        return new DisassociateRepositoryResponse($result->toArray());
    }
}
