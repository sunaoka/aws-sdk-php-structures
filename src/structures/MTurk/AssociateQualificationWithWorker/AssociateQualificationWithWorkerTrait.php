<?php

namespace Sunaoka\Aws\Structures\MTurk\AssociateQualificationWithWorker;

trait AssociateQualificationWithWorkerTrait
{
    /**
     * @param AssociateQualificationWithWorkerRequest $args
     * @return AssociateQualificationWithWorkerResponse
     */
    public function associateQualificationWithWorker(AssociateQualificationWithWorkerRequest $args)
    {
        $result = parent::associateQualificationWithWorker($args->toArray());
        return new AssociateQualificationWithWorkerResponse($result->toArray());
    }
}
