<?php

namespace Sunaoka\Aws\Structures\MTurk\DisassociateQualificationFromWorker;

trait DisassociateQualificationFromWorkerTrait
{
    /**
     * @param DisassociateQualificationFromWorkerRequest $args
     * @return DisassociateQualificationFromWorkerResponse
     */
    public function disassociateQualificationFromWorker(DisassociateQualificationFromWorkerRequest $args)
    {
        $result = parent::disassociateQualificationFromWorker($args->toArray());
        return new DisassociateQualificationFromWorkerResponse($result->toArray());
    }
}
